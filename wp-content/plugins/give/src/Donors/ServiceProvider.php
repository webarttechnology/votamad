<?php

namespace Give\Donors;

use Give\Donors\CustomFields\Controllers\DonorDetailsController;
use Give\Donors\ListTable\DonorsListTable;
use Give\Donors\Models\Donor;
use Give\Donors\Repositories\DonorRepositoryProxy;
use Give\Helpers\Hooks;
use Give\ServiceProviders\ServiceProvider as ServiceProviderInterface;
use Give_Donor as LegacyDonor;

/**
 * @since 2.19.6
 */
class ServiceProvider implements ServiceProviderInterface
{

    /**
     * @inheritDoc
     */
    public function register()
    {
        give()->singleton('donors', DonorRepositoryProxy::class);
        give()->singleton(DonorsListTable::class, function() {
            $listTable = new DonorsListTable();
            Hooks::doAction('givewp_donors_list_table', $listTable);

            return $listTable;
        });
    }

    /**
     * @inheritDoc
     */
    public function boot()
    {
        $userId = get_current_user_id();
        $showLegacy = get_user_meta($userId, '_give_donors_archive_show_legacy', true);
        // only register new admin page if user hasn't chosen to use the old one
        if(empty($showLegacy)) {
            Hooks::addAction('admin_menu', DonorsAdminPage::class, 'registerMenuItem', 30);

            if (DonorsAdminPage::isShowing()) {
                Hooks::addAction('admin_enqueue_scripts', DonorsAdminPage::class, 'loadScripts');
            }
        }
        elseif(DonorsAdminPage::isShowing())
        {
            Hooks::addAction( 'admin_head', DonorsAdminPage::class, 'renderReactSwitch');
        }

        $this->addCustomFieldsToDonorDetails();
    }

    /**
     * @since 3.0.0
     */
    private function addCustomFieldsToDonorDetails()
    {
        add_action('give_donor_after_tables', static function (LegacyDonor $legacyDonor) {
            /** @var Donor $donor */
            $donor = Donor::find($legacyDonor->id);

            echo (new DonorDetailsController())->show($donor);
        });
    }
}
