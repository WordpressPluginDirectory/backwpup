<?php
use BackWPup\Utils\BackWPupHelpers;

$jobs = BackWPup_Job::get_jobs();
$backup_now_button_status = true;
if ( count( $jobs ) > 0 ) {
  $backup_now_button_status = false;
}

BackWPupHelpers::component("form/button", [
  "identifier" => "backwpup-backup-now",
  "type" => "secondary",
  "label" => __("Backup Now", 'backwpup'),
  "icon_name" => "download",
  "icon_position" => "after",
  "trigger" => "open-modal",
  "display" => "backup-now",
  "disabled" => $backup_now_button_status,
  "class" => "whitespace-nowrap backwpup-button-backup",
]);
?>

<?php
BackWPupHelpers::component("form/button", [
  "type" => "link",
  "label" => __("Advanced settings", 'backwpup'),
  "trigger" => "open-sidebar",
  "display" => "advanced-settings",
  "class" => "max-md:hidden",
]);
?>

<button class="md:hidden js-backwpup-open-sidebar" data-content="advanced-settings">
  <?php BackWPupHelpers::component("icon", ["name" => "settings"]); ?>
</button>