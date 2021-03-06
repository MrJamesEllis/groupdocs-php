<?php
/**
 *  Copyright 2012 GroupDocs.
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */

/**
 * 
 *
 * NOTE: This class is auto generated by the swagger code generator program. Do not edit the class manually.
 *
 */
class UserInfo {

  static $swaggerTypes = array(
      'nickname' => 'string',
      'firstname' => 'string',
      'lastname' => 'string',
      'pkey' => 'string',
      'pswd_salt' => 'string',
      'claimed_id' => 'string',
      'token' => 'string',
      'storage' => 'int',
      'photo' => 'array[int]',
      'active' => 'bool',
      'trial' => 'bool',
      'news_eanbled' => 'bool',
      'alerts_eanbled' => 'bool',
      'support_eanbled' => 'bool',
      'support_email' => 'string',
      'apps' => 'string',
      'annotation_branded' => 'bool',
      'viewer_branded' => 'bool',
      'is_real_time_broadcast_enabled' => 'bool',
      'is_scroll_broadcast_enabled' => 'bool',
      'is_zoom_broadcast_enabled' => 'bool',
      'annotation_logo' => 'array[int]',
      'pointer_tool_cursor' => 'array[int]',
      'annotation_header_options' => 'int',
      'is_annotation_navigation_widget_enabled' => 'bool',
      'is_annotation_zoom_widget_enabled' => 'bool',
      'is_annotation_download_widget_enabled' => 'bool',
      'is_annotation_print_widget_enabled' => 'bool',
      'is_annotation_help_widget_enabled' => 'bool',
      'is_right_panel_enabled' => 'bool',
      'is_thumbnails_panel_enabled' => 'bool',
      'is_standard_header_always_shown' => 'bool',
      'is_toolbar_enabled' => 'bool',
      'is_text_annotation_button_enabled' => 'bool',
      'is_rectangle_annotation_button_enabled' => 'bool',
      'is_point_annotation_button_enabled' => 'bool',
      'is_strikeout_annotation_button_enabled' => 'bool',
      'is_polyline_annotation_button_enabled' => 'bool',
      'is_typewriter_annotation_button_enabled' => 'bool',
      'is_watermark_annotation_button_enabled' => 'bool',
      'is_text_replacement_annotation_button_enabled' => 'bool',
      'is_arrow_annotation_button_enabled' => 'bool',
      'is_text_redaction_annotation_button_enabled' => 'bool',
      'is_resource_redaction_annotation_button_enabled' => 'bool',
      'is_text_underline_annotation_button_enabled' => 'bool',
      'is_distance_annotation_button_enabled' => 'bool',
      'is_annotation_document_name_shown' => 'bool',
      'annotation_navigation_icons' => 'array[int]',
      'annotation_tool_icons' => 'array[int]',
      'annotation_background_color' => 'int',
      'viewer_logo' => 'array[int]',
      'viewer_options' => 'int',
      'is_viewer_navigation_widget_enabled' => 'bool',
      'is_viewer_zoom_widget_enabled' => 'bool',
      'is_viewer_download_widget_enabled' => 'bool',
      'is_viewer_print_widget_enabled' => 'bool',
	  'is_viewer_search_widget_enabled' => 'bool',
      'is_viewer_help_widget_enabled' => 'bool',
      'is_viewer_document_name_shown' => 'bool',
      'isviewer_right_mouse_button_menu_enabled' => 'bool',
      'signedupOn' => 'string',
      'signedinOn' => 'string',
      'signin_count' => 'int',
      'roles' => 'array[RoleInfo]',
      'signature_watermark_enabled' => 'bool',
      'signature_desktop_notifications' => 'bool',
      'webhook_notification_retries' => 'int',
      'webhook_notification_failed_recipients' => 'string',
      'signature_color' => 'string',
      'signature_save_field_changes_automatically' => 'bool',
      'signature_use_custom_email_templates' => 'bool',
      'signature_envelope_sent_owner_template' => 'string',
      'signature_envelope_sent_other_template' => 'string',
      'signature_envelope_completed_template' => 'string',
      'signature_envelope_signed_template' => 'string',
      'signature_envelope_declined_template' => 'string',
      'signature_envelope_failed_template' => 'string',
      'signature_envelope_cancelled_template' => 'string',
      'signature_envelope_expired_template' => 'string',
      'signature_envelope_step_expired_template' => 'string',
      'signature_envelope_recipient_reminder_template' => 'string',
      'signature_form_signed_template' => 'string',
      'signature_form_require_user_auth_for_sign' => 'bool',
      'signature_form_request_user_auth_by_photo' => 'bool',
      'signature_form_require_user_identity_validation' => 'bool',
      'signature_envelope_require_user_auth_for_sign' => 'bool',
      'signature_envelope_request_user_auth_by_photo' => 'bool',
      'signature_enable_uploaded_signature' => 'bool',
      'signature_enable_typed_signature' => 'bool',
      'signature_enable_envelope_comment' => 'bool',
      'signature_enable_form_comment' => 'bool',
      'can_participan_download_form' => 'bool',
      'can_participant_print_form' => 'bool',
      'notify_form_owner_on_sign' => 'bool',
      'attach_signed_form_document' => 'bool',
      'show_participant_comment_in_signed_document' => 'bool',
      'forms_notify_other_on_sign' => 'string',
      'form_document_parse_fields' => 'bool',
      'id' => 'string',
      'guid' => 'string',
      'primary_email' => 'string'

    );

  public $nickname; // string
  public $firstname; // string
  public $lastname; // string
  public $pkey; // string
  public $pswd_salt; // string
  public $claimed_id; // string
  public $token; // string
  public $storage; // int
  public $photo; // array[int]
  public $active; // bool
  public $trial; // bool
  public $news_eanbled; // bool
  public $alerts_eanbled; // bool
  public $support_eanbled; // bool
  public $support_email; // string
  public $apps; // string
  public $annotation_branded; // bool
  public $viewer_branded; // bool
  public $is_real_time_broadcast_enabled; // bool
  public $is_scroll_broadcast_enabled; // bool
  public $is_zoom_broadcast_enabled; // bool
  public $annotation_logo; // array[int]
  public $pointer_tool_cursor; // array[int]
  public $annotation_header_options; // int
  public $is_annotation_navigation_widget_enabled; // bool
  public $is_annotation_zoom_widget_enabled; // bool
  public $is_annotation_download_widget_enabled; // bool
  public $is_annotation_print_widget_enabled; // bool
  public $is_annotation_help_widget_enabled; // bool
  public $is_right_panel_enabled; // bool
  public $is_thumbnails_panel_enabled; // bool
  public $is_standard_header_always_shown; // bool
  public $is_toolbar_enabled; // bool
  public $is_text_annotation_button_enabled; // bool
  public $is_rectangle_annotation_button_enabled; // bool
  public $is_point_annotation_button_enabled; // bool
  public $is_strikeout_annotation_button_enabled; // bool
  public $is_polyline_annotation_button_enabled; // bool
  public $is_typewriter_annotation_button_enabled; // bool
  public $is_watermark_annotation_button_enabled; // bool
  public $is_text_replacement_annotation_button_enabled; // bool
  public $is_arrow_annotation_button_enabled; // bool
  public $is_text_redaction_annotation_button_enabled; // bool
  public $is_resource_redaction_annotation_button_enabled; // bool
  public $is_text_underline_annotation_button_enabled; // bool
  public $is_distance_annotation_button_enabled; // bool
  public $is_annotation_document_name_shown; // bool
  public $annotation_navigation_icons; // array[int]
  public $annotation_tool_icons; // array[int]
  public $annotation_background_color; // int
  public $viewer_logo; // array[int]
  public $viewer_options; // int
  public $is_viewer_navigation_widget_enabled; // bool
  public $is_viewer_zoom_widget_enabled; // bool
  public $is_viewer_download_widget_enabled; // bool
  public $is_viewer_print_widget_enabled; // bool
  public $is_viewer_search_widget_enabled; // bool
  public $is_viewer_help_widget_enabled; // bool
  public $is_viewer_document_name_shown; // bool
  public $isviewer_right_mouse_button_menu_enabled; // bool
  public $signedupOn; // string
  public $signedinOn; // string
  public $signin_count; // int
  public $roles; // array[RoleInfo]
  public $signature_watermark_enabled; // bool
  public $signature_desktop_notifications; // bool
  public $webhook_notification_retries; // int
  public $webhook_notification_failed_recipients; // string
  public $signature_color; // string
  public $signature_save_field_changes_automatically; // bool
  public $signature_use_custom_email_templates; // bool
  public $signature_envelope_sent_owner_template; // string
  public $signature_envelope_sent_other_template; // string
  public $signature_envelope_completed_template; // string
  public $signature_envelope_signed_template; // string
  public $signature_envelope_declined_template; // string
  public $signature_envelope_failed_template; // string
  public $signature_envelope_cancelled_template; // string
  public $signature_envelope_expired_template; // string
  public $signature_envelope_step_expired_template; // string
  public $signature_envelope_recipient_reminder_template; // string
  public $signature_form_signed_template; // string
  public $signature_form_require_user_auth_for_sign; // bool
  public $signature_form_request_user_auth_by_photo; // bool
  public $signature_form_require_user_identity_validation; // bool
  public $signature_envelope_require_user_auth_for_sign; // bool
  public $signature_envelope_request_user_auth_by_photo; // bool
  public $signature_enable_uploaded_signature; // bool
  public $signature_enable_typed_signature; // bool
  public $signature_enable_envelope_comment; // bool
  public $signature_enable_form_comment; // bool
  public $can_participan_download_form; // bool
  public $can_participant_print_form; // bool
  public $notify_form_owner_on_sign; // bool
  public $attach_signed_form_document; // bool
  public $show_participant_comment_in_signed_document; // bool
  public $forms_notify_other_on_sign; // string
  public $form_document_parse_fields; // bool
  public $id; // string
  public $guid; // string
  public $primary_email; // string
  }

