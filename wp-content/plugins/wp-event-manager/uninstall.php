<?phpif ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {	exit();}wp_clear_scheduled_hook( 'event_manager_delete_old_previews' );wp_clear_scheduled_hook( 'event_manager_check_for_expired_events' );wp_trash_post( get_option( 'event_manager_submit_event_form_page_id' ) );wp_trash_post( get_option( 'event_manager_event_dashboard_page_id' ) );wp_trash_post( get_option( 'event_manager_events_page_id' ) );$options = array(	'wp_event_manager_version',	'event_manager_per_page',	'event_manager_hide_cancelled_events',	'event_manager_hide_expired_content',	'event_manager_enable_categories',	'event_manager_enable_event_types',	'event_manager_enable_event_ticket_prices',	'event_manager_enable_default_category_multiselect',	'event_manager_enable_default_event_type_multiselect',	'event_manager_category_filter_type',	'event_manager_event_type_filter_type',	'event_manager_user_requires_account',	'event_manager_enable_registration',	'event_manager_registration_role',	'event_manager_submission_requires_approval',	'event_manager_user_can_edit_pending_submissions',	'event_manager_submission_expire_options',	'event_manager_submission_duration',	'event_manager_allowed_registration_method',	'event_manager_submit_event_form_page_id',	'event_manager_event_dashboard_page_id',	'event_manager_events_page_id',	'event_manager_installed_terms',	'event_manager_submit_page_slug',	'event_manager_event_dashboard_page_slug',	'event_manager_rating_showcase_admin_notices_dismiss',	'event_manager_google_maps_api_key');foreach ( $options as $option ) {	delete_option( $option );}