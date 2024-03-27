<?php

return [
    'ad'				        => 'Идэвхтэй лавлах',
    'ad_domain'				    => 'Active Directory домэйн',
    'ad_domain_help'			=> 'Энэ нь заримдаа таны имэйл домэйнтой адил боловч үргэлж биш юм.',
    'ad_append_domain_label'    => 'Append domain name',
    'ad_append_domain'          => 'Append domain name to username field',
    'ad_append_domain_help'     => 'User isn\'t required to write "username@domain.local", they can just type "username".',
    'admin_cc_email'            => 'CC Имэйл',
    'admin_cc_email_help'       => 'Хэрэв та хэрэглэгчдэд илгээсэн хүлээн авах/олгох имэйлийн хуулбарыг нэмэлт имэйл үрүү илгээхийг хүсвэл энд оруулна уу. Үгүй бол энэ талбарыг хоосон орхино уу.',
    'admin_settings'            => 'Admin Settings',
    'is_ad'				        => 'Энэ бол Active Directory Server',
    'alerts'                	=> 'Alerts',
    'alert_title'               => 'Update Notification Settings',
    'alert_email'				=> 'Анхааруулга илгээх',
    'alert_email_help'    => 'Email addresses or distribution lists you want alerts to be sent to, comma separated',
    'alerts_enabled'			=> 'Идэвхжүүлсэн дохиог',
    'alert_interval'			=> 'Exped Alerts (босоо хоногоор)',
    'alert_inv_threshold'		=> 'Бараа материалын Alert босго',
    'allow_user_skin'           => 'Allow User Skin',
    'allow_user_skin_help_text' => 'Checking this box will allow a user to override the UI skin with a different one.',
    'asset_ids'					=> 'Хөрөнгийн дугаар',
    'audit_interval'            => 'Аудитын интервал',
    'audit_interval_help'       => 'If you are required to regularly physically audit your assets, enter the interval in months that you use. If you update this value, all of the "next audit dates" for assets with an upcoming audit date will be updated.',
    'audit_warning_days'        => 'Аудитын анхааруулах босго',
    'audit_warning_days_help'   => 'Хөрөнгө аудит хийхэд бэлэн байх үед танд хэдэн өдөр урьдчилан урьдчилан анхааруулах ёстой вэ?',
    'auto_increment_assets'		=> 'Generate auto-incrementing asset tags',
    'auto_increment_prefix'		=> 'Угтвар (заавал биш)',
    'auto_incrementing_help'    => 'Enable auto-incrementing asset tags first to set this',
    'backups'					=> 'Нөөцлөлтүүд',
    'backups_help'              => 'Create, download, and restore backups ',
    'backups_restoring'         => 'Restoring from Backup',
    'backups_upload'            => 'Upload Backup',
    'backups_path'              => 'Backups on the server are stored in <code>:path</code>',
    'backups_restore_warning'   => 'Use the restore button <small><span class="btn btn-xs btn-warning"><i class="text-white fas fa-retweet" aria-hidden="true"></i></span></small> to restore from a previous backup. (This does not currently work with S3 file storage or Docker.)<br><br>Your <strong>entire :app_name database and any uploaded files will be completely replaced</strong> by what\'s in the backup file.  ',
    'backups_logged_out'         => 'All existing users, including you, will be logged out once your restore is complete.',
    'backups_large'             => 'Very large backups may time out on the restore attempt and may still need to be run via command line. ',
    'barcode_settings'			=> 'Бар кодын тохиргоо',
    'confirm_purge'			    => 'Цэвэршүүлэлтийг баталгаажуулна уу',
    'confirm_purge_help'		=> 'Enter the text "DELETE" in the box below to purge your deleted records. This action cannot be undone and will PERMANENTLY delete all soft-deleted items and users. (You should make a backup first, just to be safe.)',
    'custom_css'				=> 'CSS тохиргоо',
    'custom_css_help'			=> 'Ямар нэгэн гаалийн CSS дарж өөрчлөхийг хүсч оруулаарай. &lt;style&gt;&lt;/style&gt; хаягуудыг бүү оруулаарай.',
    'custom_forgot_pass_url'	=> 'Дурын нууц үг сэргээх URL',
    'custom_forgot_pass_url_help'	=> 'Энэ нь нэвтрэх дэлгэц дээрх мартагдсан нууц үгийн URL-г орлох ба хүмүүсийг дотоод хэрэглээний LDAP нууц үг шинэчлэх үйлдэл үрүү чиглүүлэхэд туслана. Энэ нь local хэрэглэгчийн мартсан нууц үгийн үйлдлийг идэвхгүйжүүлэх болно.',
    'dashboard_message'			=> 'Хянах самбарын мессэж',
    'dashboard_message_help'	=> 'Хяналт самбарыг харах эрхтэй хэнд ч энэ текст харагдана.',
    'default_currency'  		=> 'Анхдагч валют',
    'default_eula_text'			=> 'Үндсэн EULA',
    'default_language'			=> 'Үндсэн хэл',
    'default_eula_help_text'	=> 'Та мөн EULA-г тусгай активын төрлөөр ангилж болно.',
    'display_asset_name'        => 'Дэлгэцийн нэрийг харуулах',
    'display_checkout_date'     => 'Дэлгэцийн төлбөр хийх хугацаа',
    'display_eol'               => 'EOL харуулах хүснэгтийг харна уу',
    'display_qr'                => 'Талбай кодыг харуулах',
    'display_alt_barcode'		=> '1D бар кодыг харуулах',
    'email_logo'                => 'Email Logo',
    'barcode_type'				=> '2D бар кодны төрөл',
    'alt_barcode_type'			=> '1D бар кодын төрөл',
    'email_logo_size'       => 'Square logos in email look best. ',
    'enabled'                   => 'Enabled',
    'eula_settings'				=> 'EULA тохиргоо',
    'eula_markdown'				=> 'Энэ EULA нь <a href="https://help.github.com/articles/github-flavored-markdown/"> Гитуб амттай markdown</a>.',
    'favicon'                   => 'Favicon',
    'favicon_format'            => 'Accepted filetypes are ico, png, and gif. Other image formats may not work in all browsers.',
    'favicon_size'          => 'Favicons should be square images, 16x16 pixels.',
    'footer_text'               => 'Нэмэлт хөл хэсгийн текст ',
    'footer_text_help'          => 'Энэ текст баруун талын хөл хэсэгт гарч ирнэ. Холбоосыг <a href="https://help.github.com/articles/github-flavored-markdown/"> Github маягийн markdown </a> ашиглан хэрэглэнэ. Шинэ мөр, толгой, зураг гэх мэт нь урьдчилан таамаглах аргагүй үр дүнд хүргэж болзошгүй.',
    'general_settings'			=> 'Ерөнхий Тохиргоо',
    'general_settings_keywords' => 'company support, signature, acceptance, email format, username format, images, per page, thumbnail, eula, gravatar, tos, dashboard, privacy',
    'general_settings_help'     => 'Default EULA and more',
    'generate_backup'			=> 'Нөөц үүсгэх',
    'google_workspaces'         => 'Google Workspaces',
    'header_color'              => 'Толгойн өнгө',
    'info'                      => 'Эдгээр тохиргоонууд нь таны суулгах зарим асуудлуудыг өөрчлөх боломжийг олгоно.',
    'label_logo'                => 'Label Logo',
    'label_logo_size'           => 'Square logos look best - will be displayed in the top right of each asset label. ',
    'laravel'                   => 'Лараэлийн хувилбар',
    'ldap'                      => 'LDAP',
    'ldap_default_group'        => 'Default Permissions Group',
    'ldap_default_group_info'   => 'Select a group to assign to newly synced users. Remember that a user takes on the permissions of the group they are assigned.',
    'no_default_group'          => 'No Default Group',
    'ldap_help'                 => 'LDAP/Active Directory',
    'ldap_client_tls_key'       => 'LDAP Client TLS Key',
    'ldap_client_tls_cert'      => 'LDAP Client-Side TLS Certificate',
    'ldap_enabled'              => 'LDAP идэвхжсэн',
    'ldap_integration'          => 'LDAP интеграцчилал',
    'ldap_settings'             => 'LDAP Тохиргоо',
    'ldap_client_tls_cert_help' => 'Client-Side TLS Certificate and Key for LDAP connections are usually only useful in Google Workspace configurations with "Secure LDAP." Both are required.',
    'ldap_location'             => 'LDAP Location',
'ldap_location_help'             => 'The Ldap Location field should be used if <strong>an OU is not being used in the Base Bind DN.</strong> Leave this blank if an OU search is being used.',
    'ldap_login_test_help'      => 'Таны LDAP нэвтрэлтийг зөв тохируулсан эсэхийг шалгахын тулд дээр дурдсан үндсэн DN-ээс хүчинтэй LDAP хэрэглэгчийн нэр, нууц үгээ оруулна уу. ТА ЭХЛЭЭД ШИНЭЧЛЭГДСЭН LDAP ТОХИРГООГОО ХАДГАЛАХ ЁСТОЙ.',
    'ldap_login_sync_help'      => 'Энэ нь зөвхөн LDAP-ийг зөв синхрончлох боломжтой эсэхийг шалгадаг. Хэрэв таны LDAP баталгаажуулалтын асуулга буруу байвал хэрэглэгчид нэвтрэх боломжгүй хэвээр байх магадлалтай. ТА ЭХЛЭЭД ШИНЭЧЛЭГДСЭН LDAP ТОХИРГООГОО ХАДГАЛАХ ЁСТОЙ.',
    'ldap_manager'              => 'LDAP Manager',
    'ldap_server'               => 'LDAP сервер',
    'ldap_server_help'          => 'Энэ нь ldap: // (unrrypted буюу TLS) эсвэл ldaps-ээр эхлэх ёстой: // (SSL нь)',
    'ldap_server_cert'			=> 'LDAP SSL гэрчилгээ баталгаажуулалт',
    'ldap_server_cert_ignore'	=> 'Хүчингүй SSL гэрчилгээг зөвшөөрөх',
    'ldap_server_cert_help'		=> 'Хэрэв та өөрийгөө гарын үсэг зурсан SSL сертификат ашиглаж байгаа бол энэ сонголтыг сонгож хүчингүй SSL сертификатыг хүлээн авахыг хүсч байна.',
    'ldap_tls'                  => 'TLS ашиглах',
    'ldap_tls_help'             => 'Хэрэв та LDAP сервер дээрээ STARTTLS ажиллуулж байгаа бол үүнийг шалгаж үзэх хэрэгтэй.',
    'ldap_uname'                => 'LDAP холбох хэрэглэгчийн нэр',
    'ldap_dept'                 => 'LDAP Department',
    'ldap_phone'                => 'LDAP Telephone Number',
    'ldap_jobtitle'             => 'LDAP Job Title',
    'ldap_country'              => 'LDAP Country',
    'ldap_pword'                => 'LDAP нууц үгийн холбох',
    'ldap_basedn'               => 'Суурь Bind DN',
    'ldap_filter'               => 'LDAP шүүгч',
    'ldap_pw_sync'              => 'LDAP нууц үгийн синк',
    'ldap_pw_sync_help'         => 'Хэрэв та LDAP нууц үгүүдийг локал нууц үгтэй синхрончлохыг хүсэхгүй байгаа бол энэ хайрцгийг идэвхгүй болгоно уу. Ингэхгүй бол таны LDAP сервер ямар нэг шалтгаанаар хүрэх боломжгүй бол таны хэрэглэгчид нэвтэрч чадахгүй байж болно гэсэн үг юм.',
    'ldap_username_field'       => 'Хэрэглэгчийн талбар',
    'ldap_lname_field'          => 'Сүүлийн нэр',
    'ldap_fname_field'          => 'LDAP анхны нэр',
    'ldap_auth_filter_query'    => 'LDAP Танин шалгах хүсэлт',
    'ldap_version'              => 'LDAP хувилбар',
    'ldap_active_flag'          => 'LDAP Active Flag',
    'ldap_activated_flag_help'  => 'This value is used to determine whether a synced user can login to Snipe-IT. <strong>It does not affect the ability to check items in or out to them</strong>, and should be the <strong>attribute name</strong> within your AD/LDAP, <strong>not the value</strong>. <br><br>If this field is set to a field name that does not exist in your AD/LDAP, or the value in the AD/LDAP field is set to <code>0</code> or <code>false</code>, <strong>user login will be disabled</strong>. If the value in the AD/LDAP field is set to <code>1</code> or <code>true</code> or <em>any other text</em> means the user can log in. When the field is blank in your AD, we respect the <code>userAccountControl</code> attribute, which usually allows non-suspended users to log in.',
    'ldap_emp_num'              => 'LDAP Ажилчдын тоо',
    'ldap_email'                => 'LDAP И-мэйл',
    'ldap_test'                 => 'Test LDAP',
    'ldap_test_sync'            => 'Test LDAP Synchronization',
    'license'                   => 'Програм хангамжийн лиценз',
    'load_remote'               => 'Use Gravatar',
    'load_remote_help_text'		=> 'Uncheck this box if your install cannot load scripts from the outside internet. This will prevent Snipe-IT from trying load images from Gravatar.',
    'login'                     => 'Login Attempts',
    'login_attempt'             => 'Login Attempt',
    'login_ip'                  => 'IP Address',
    'login_success'             => 'Success?',
    'login_user_agent'          => 'User Agent',
    'login_help'                => 'List of attempted logins',
    'login_note'                => 'Нэвтрэх Тайлбар',
    'login_note_help'           => 'Нэвтрэх дэлгэц дээр цөөн хэдэн өгүүлбэрийг оруулаад, жишээ нь алдагдсан эсвэл хулгайлсан төхөөрөмжийг олж авсан хүмүүст туслах. Энэ талбар <a href="https://help.github.com/articles/github-flavored-markdown/">Github амт markdown</a>',
    'login_remote_user_text'    => 'Алсын хэрэглэгчийн нэвтрэх сонголтууд',
    'login_remote_user_enabled_text' => 'Алсын хэрэглэгчийн мэдээлэл ашиглан нэвтрэхийг идэвхжүүлэх',
    'login_remote_user_enabled_help' => 'Энэ сонголт нь "Common Gateway Interface (RFC 3875)" -ын дагуу REMOTE_USER толгой дамжуулан баталгаажуулалтыг идэвхжүүлдэг.',
    'login_common_disabled_text' => 'Баталгаажуулалтын бусад механизмыг идэвхгүй болгох',
    'login_common_disabled_help' => 'Энэ сонголт баталгаажуулалтын бусад механизмыг идэвхгүй болгодог. REMOTE_USER нэвтрэл ажиллаж байгаа тохиолдолд энэ сонголтыг идэвхтэй болгоно уу',
    'login_remote_user_custom_logout_url_text' => 'Дурын гарах URL',
    'login_remote_user_custom_logout_url_help' => 'Хэрэв энд url оруулсан бол хэрэглэгч Snipe-IT-ээс гарсны дараа энэ URL руу шилжих болно. Энэ нь танай нэвтрэлтийн нэгдсэн систем зөв хаагдахад ашигтай юм.',
    'login_remote_user_header_name_text' => 'Custom user name header',
    'login_remote_user_header_name_help' => 'Use the specified header instead of REMOTE_USER',
    'logo'                    	=> 'Лого',
    'logo_print_assets'         => 'Хэвлэхэд ашиглах',
    'logo_print_assets_help'    => 'Хэвлэх боломжтой хөрөнгийн жагсаалтад брендинг ашиглах ',
    'full_multiple_companies_support_help_text' => 'Компаниудын өмч хөрөнгөд компанид хуваарилсан хэрэглэгчдийг (түүний дотор админуудыг) хязгаарлах.',
    'full_multiple_companies_support_text' => 'Олон тооны компаниудын дэмжлэг',
    'show_in_model_list'   => 'Загвар сонгох хэсэгт харуулах',
    'optional'					=> 'Нэмэлт',
    'per_page'                  => 'Нэг хуудасны үр дүн',
    'php'                       => 'PHP хувилбар',
    'php_info'                  => 'PHP Info',
    'php_overview'              => 'PHP',
    'php_overview_keywords'     => 'phpinfo, system, info',
    'php_overview_help'         => 'PHP System info',
    'php_gd_info'               => 'Та php-gd-г QR кодуудыг харуулахын тулд суулгах зааврыг харах хэрэгтэй.',
    'php_gd_warning'            => 'PHP Image Processing болон GD залгаас суулгаагүй байна.',
    'pwd_secure_complexity'     => 'Нууц үгийн нарийн төвөгтэй байдал',
    'pwd_secure_complexity_help' => 'Хүчээр ажиллахад шаардагдах нууц үгийн нарийн түвшний дүрмийг сонгоорой.',
    'pwd_secure_complexity_disallow_same_pwd_as_user_fields' => 'Password cannot be the same as first name, last name, email, or username',
    'pwd_secure_complexity_letters' => 'Require at least one letter',
    'pwd_secure_complexity_numbers' => 'Require at least one number',
    'pwd_secure_complexity_symbols' => 'Require at least one symbol',
    'pwd_secure_complexity_case_diff' => 'Require at least one uppercase and one lowercase',
    'pwd_secure_min'            => 'Нууц үгийн хамгийн бага тэмдэгт',
    'pwd_secure_min_help'       => 'Хамгийн бага зөвшөөрөгдөх утга нь 8 байна',
    'pwd_secure_uncommon'       => 'Нийтлэг нууц үгийг урьдчилан сэргийлэх',
    'pwd_secure_uncommon_help'  => 'Энэ нь хэрэглэгчид зөрчсөн гэж мэдээлсэн дээд түвшний 10,000 нууц үгнээс нийтлэг нууц үгийг ашиглах боломжийг хэрэглэгчдэд олгохгүй.',
    'qr_help'                   => 'Эхлээд QR кодыг идэвхжүүлнэ үү',
    'qr_text'                   => 'QR кодын текст',
    'saml'                      => 'SAML',
    'saml_title'                => 'Update SAML settings',
    'saml_help'                 => 'SAML settings',
    'saml_enabled'              => 'SAML enabled',
    'saml_integration'          => 'SAML Integration',
    'saml_sp_entityid'          => 'Entity ID',
    'saml_sp_acs_url'           => 'Assertion Consumer Service (ACS) URL',
    'saml_sp_sls_url'           => 'Single Logout Service (SLS) URL',
    'saml_sp_x509cert'          => 'Public Certificate',
    'saml_sp_metadata_url'      => 'Metadata URL',
    'saml_idp_metadata'         => 'SAML IdP Metadata',
    'saml_idp_metadata_help'    => 'You can specify the IdP metadata using a URL or XML file.',
    'saml_attr_mapping_username' => 'Attribute Mapping - Username',
    'saml_attr_mapping_username_help' => 'NameID will be used if attribute mapping is unspecified or invalid.',
    'saml_forcelogin_label'     => 'SAML Force Login',
    'saml_forcelogin'           => 'Make SAML the primary login',
    'saml_forcelogin_help'      => 'You can use \'/login?nosaml\' to get to the normal login page.',
    'saml_slo_label'            => 'SAML Single Log Out',
    'saml_slo'                  => 'Send a LogoutRequest to IdP on Logout',
    'saml_slo_help'             => 'This will cause the user to be first redirected to the IdP on logout. Leave unchecked if the IdP doesn\'t correctly support SP-initiated SAML SLO.',
    'saml_custom_settings'      => 'SAML Custom Settings',
    'saml_custom_settings_help' => 'You can specify additional settings to the onelogin/php-saml library. Use at your own risk.',
    'saml_download'             => 'Download Metadata',
    'setting'                   => 'Тохируулах',
    'settings'                  => 'Тохиргоо',
    'show_alerts_in_menu'       => 'Дээд цэсэнд анхааруулга харуулах',
    'show_archived_in_list'     => 'Архивлагдсан хөрөнгүүд',
    'show_archived_in_list_text'     => '"Бүх хөрөнгө" жагсаалтад архивлагдсан хөрөнгийг харуулах',
    'show_assigned_assets'      => 'Show assets assigned to assets',
    'show_assigned_assets_help' => 'Display assets which were assigned to the other assets in View User -> Assets, View User -> Info -> Print All Assigned and in Account -> View Assigned Assets.',
    'show_images_in_email'     => 'Имэйл дотор зураг харуулах',
    'show_images_in_email_help'   => 'Хэрэв таны Snipe-IT суулгац VPN эсвэл хаалттай сүлжээний ард байгаа бол сүлжээнээс гадуурх хэрэглэгчид энэ суулгацаас авсан зургийг имэйлдээ ачаалах боломжгүй бол энэ хайрцгийг арилгана уу.',
    'site_name'                 => 'Сайтын нэр',
    'integrations'               => 'Integrations',
    'slack'                     => 'Slack',
    'general_webhook'           => 'General Webhook',
    'ms_teams'                  => 'Microsoft Teams',
    'webhook'                   => ':app',
    'webhook_presave'           => 'Test to Save',
    'webhook_title'               => 'Update Webhook Settings',
    'webhook_help'                => 'Integration settings',
    'webhook_botname'             => ':app Botname',
    'webhook_channel'             => ':app Channel',
    'webhook_endpoint'            => ':app Endpoint',
    'webhook_integration'         => ':app Settings',
    'webhook_test'                 =>'Test :app integration',
    'webhook_integration_help'    => ':app integration is optional, however the endpoint and channel are required if you wish to use it. To configure :app integration, you must first <a href=":webhook_link" target="_new" rel="noopener">create an incoming webhook</a> on your :app account. Click on the <strong>Test :app Integration</strong> button to confirm your settings are correct before saving. ',
    'webhook_integration_help_button'    => 'Once you have saved your :app information, a test button will appear.',
    'webhook_test_help'           => 'Test whether your :app integration is configured correctly. YOU MUST SAVE YOUR UPDATED :app SETTINGS FIRST.',
    'snipe_version'  			=> 'Snipe-IT хувилбар',
    'support_footer'            => 'Хөл хэсэг дэх холбоосууд ',
    'support_footer_help'       => 'Snipe-IT Support мэдээлэл ба хэрэглэгчийн гарын авлагын холбоосыг хэн харж болохыг заах өгөх',
    'version_footer'            => 'Хөл хэсэг дэх дугаар ',
    'version_footer_help'       => 'Snipe-IT хувилбарыг хэн харж болохыг зааж өгөх.',
    'system'                    => 'Системийн мэдээлэл',
    'update'                    => 'Тохиргоог шинэчлэнэ',
    'value'                     => 'Утга',
    'brand'                     => 'Брэнд',
    'brand_keywords'            => 'footer, logo, print, theme, skin, header, colors, color, css',
    'brand_help'                => 'Logo, Site Name',
    'web_brand'                 => 'Web Branding Type',
    'about_settings_title'      => 'Тохиргооны тухай',
    'about_settings_text'       => 'Эдгээр тохиргоонууд нь таны суулгах зарим асуудлуудыг өөрчлөх боломжийг олгоно.',
    'labels_per_page'           => 'Хуудасны нэг хуудсууд',
    'label_dimensions'          => 'Шошго хэмжээ (инч)',
    'next_auto_tag_base'        => 'Дараагийн автомат авалт',
    'page_padding'              => 'Хуудасны хэмжээ (инч)',
    'privacy_policy_link'       => 'Нууцлалын бодлогын холбоос',
    'privacy_policy'            => 'Нууцлалын бодлого',
    'privacy_policy_link_help'  => 'Хэрэв энд url оруулсан бол GDPR-ийн дагуу таны нууцлалын бодлогын холбоосыг програмын доод хэсэгт болон системийн илгээсэн имэйлд оруулах болно. ',
    'purge'                     => 'Устгагдсан бүртгэл',
    'purge_deleted'             => 'Purge Deleted ',
    'labels_display_bgutter'    => 'Шошгоны доод ус зайлуулах хоолой',
    'labels_display_sgutter'    => 'Шошго талын ус зайлуулах хоолой',
    'labels_fontsize'           => 'Шошго үсгийн хэмжээ',
    'labels_pagewidth'          => 'Шошгоны хуудасны өргөн',
    'labels_pageheight'         => 'Шошго хуудасны өндөр',
    'label_gutters'        => 'Шошгоны зай (инч)',
    'page_dimensions'        => 'Хуудасны хэмжээ (инч)',
    'label_fields'          => 'Харагдах талбаруудыг тэмдэглэнэ үү',
    'inches'        => 'инч',
    'width_w'        => 'w',
    'height_h'        => 'h',
    'show_url_in_emails'                => 'Сингапурт Snipe-IT руу холбох',
    'show_url_in_emails_help_text'      => 'Хэрэв та өөрийн имэйлийн хөлөгт Snipe-IT суулгалтанд холбохыг хүсэхгүй байгаа бол энэ хайрцгийг арилга. Хэрэглэгчдийн ихэнх нь хэзээ ч нэвтэрч чадахгүй бол ашигтай.',
    'text_pt'        => 'pt',
    'thumbnail_max_h'   => 'Max зургийн хэмжээ өндөр',
    'thumbnail_max_h_help'   => 'Өгөгдлийн зураг дээр харагдах пиксел дэх хамгийн их өндрийг жагсаалт харуулах боломжтой. Min 25, хамгийн ихдээ 500.',
    'two_factor'        => 'Хоёр хүчин зүйл баталгаажуулалт',
    'two_factor_secret'        => 'Хоёр хүчин зүйлийн код',
    'two_factor_enrollment'        => 'Хоёр хүчин зүйлийн элсэлт',
    'two_factor_enabled_text'        => 'Хоёр хүчин зүйлийг идэвхжүүлэх',
    'two_factor_reset'        => 'Хоёр хүчин зүйлийн нууцыг дахин тохируулна уу',
    'two_factor_reset_help'        => 'Энэ нь хэрэглэгчийг Google Authenticator-т ​​дахин ашиглах боломжтой болно. Энэ нь одоогоор бүртгэгдсэн төхөөрөмжөө алдсан эсвэл хулгайлсан тохиолдолд ашигтай байж болно.',
    'two_factor_reset_success'          => 'Хоёр хүчин зүйл төхөөрөмжийг амжилттай дахин тохируулах',
    'two_factor_reset_error'          => 'Хоёр хүчин зүйлийн төхөөрөмжийн дахин тохируулга амжилтгүй боллоо',
    'two_factor_enabled_warning'        => 'Хэрэв та одоогоор идэвхжээгүй бол хоёр хүчин зүйлийг идэвхжүүлэх нь таныг Google Auth бүртгэлтэй төхөөрөмжтэй таныг баталгаажуулахыг шаардана. Хэрэв та элсээгүй бол та төхөөрөмжөө бүртгүүлэх боломжтой болно.',
    'two_factor_enabled_help'        => 'Энэ нь Google Authenticator ашиглан хоёр хүчин зүйлийг таньж баталгаажуулах болно.',
    'two_factor_optional'        => 'Сонгомол (Зөвшөөрөгдсөн тохиолдолд хэрэглэгчийг идэвхжүүлэх эсвэл идэвхгүй болгох боломжтой)',
    'two_factor_required'        => 'Бүх хэрэглэгчдэд шаардлагатай',
    'two_factor_disabled'        => 'Хөгжлийн бэрхшээлтэй',
    'two_factor_enter_code'	=> 'Хоёр хүчин зүйлийн кодыг оруулна уу',
    'two_factor_config_complete'	=> 'Код илгээх',
    'two_factor_enabled_edit_not_allowed' => 'Таны админ энэ тохиргоог засахыг зөвшөөрөхгүй.',
    'two_factor_enrollment_text'	=> "Хоёр хүчин зүйлийг баталгаажуулах шаардлагатай боловч таны төхөөрөмж одоогоор бүртгэгдээгүй байна. Google Authenticator аппликейшнийг нээж, төхөөрөмжөө бүртгүүлэхийн тулд доорх QR кодыг хайна уу. Та төхөөрөмжөө бүртгүүлснийхээ дараа доорх кодыг оруулна уу",
    'require_accept_signature'      => 'Гарын үсэг зурах шаардлагатай',
    'require_accept_signature_help_text'      => 'Энэ функцийг идэвхжүүлэх нь хэрэглэгчид активыг хүлээн авахдаа биечлэн гарын үсэг зурах шаардлагатай болно.',
    'left'        => 'үлдсэн',
    'right'        => 'баруун',
    'top'        => 'дээд',
    'bottom'        => 'доод',
    'vertical'        => 'босоо',
    'horizontal'        => 'хэвтээ',
    'unique_serial'                => 'Дахин давтагдашгүй сериал дугаар',
    'unique_serial_help_text'                => 'Энэ хайрцгийг шалгаснаар хөрөнгийн сериал дахь дахин давтагдашгүй дугаарлалтын хязгаарлалтыг хэрэгжүүлэх болно',
    'zerofill_count'        => 'Үүнд үл хөдлөх хөрөнгийн хаягуудын урт',
    'username_format_help'   => 'This setting will only be used by the import process if a username is not provided and we have to generate a username for you.',
    'oauth_title' => 'OAuth API Settings',
    'oauth' => 'OAuth',
    'oauth_help' => 'Oauth Endpoint Settings',
    'asset_tag_title' => 'Update Asset Tag Settings',
    'barcode_title' => 'Update Barcode Settings',
    'barcodes' => 'Barcodes',
    'barcodes_help_overview' => 'Barcode &amp; QR settings',
    'barcodes_help' => 'This will attempt to delete cached barcodes. This would typically only be used if your barcode settings have changed, or if your Snipe-IT URL has changed. Barcodes will be re-generated when accessed next.',
    'barcodes_spinner' => 'Attempting to delete files...',
    'barcode_delete_cache' => 'Delete Barcode Cache',
    'branding_title' => 'Update Branding Settings',
    'general_title' => 'Update General Settings',
    'mail_test' => 'Send Test',
    'mail_test_help' => 'This will attempt to send a test mail to :replyto.',
    'filter_by_keyword' => 'Filter by setting keyword',
    'security' => 'Security',
    'security_title' => 'Update Security Settings',
    'security_keywords' => 'password, passwords, requirements, two factor, two-factor, common passwords, remote login, logout, authentication',
    'security_help' => 'Two-factor, Password Restrictions',
    'groups_keywords' => 'permissions, permission groups, authorization',
    'groups_help' => 'Account permission groups',
    'localization' => 'Localization',
    'localization_title' => 'Update Localization Settings',
    'localization_keywords' => 'localization, currency, local, locale, time zone, timezone, international, internatinalization, language, languages, translation',
    'localization_help' => 'Language, date display',
    'notifications' => 'Notifications',
    'notifications_help' => 'Email Alerts & Audit Settings',
    'asset_tags_help' => 'Incrementing and prefixes',
    'labels' => 'Labels',
    'labels_title' => 'Update Label Settings',
    'labels_help' => 'Label sizes &amp; settings',
    'purge' => 'Purge',
    'purge_keywords' => 'permanently delete',
    'purge_help' => 'Устгагдсан бүртгэл',
    'ldap_extension_warning' => 'It does not look like the LDAP extension is installed or enabled on this server. You can still save your settings, but you will need to enable the LDAP extension for PHP before LDAP syncing or login will work.',
    'ldap_ad' => 'LDAP/AD',
    'employee_number' => 'Employee Number',
    'create_admin_user' => 'Create a User ::',
    'create_admin_success' => 'Success! Your admin user has been added!',
    'create_admin_redirect' => 'Click here to go to your app login!',
    'setup_migrations' => 'Database Migrations ::',
    'setup_no_migrations' => 'There was nothing to migrate. Your database tables were already set up!',
    'setup_successful_migrations' => 'Your database tables have been created',
    'setup_migration_output' => 'Migration output:',
    'setup_migration_create_user' => 'Next: Create User',
    'ldap_settings_link' => 'LDAP Settings Page',
    'slack_test' => 'Test <i class="fab fa-slack"></i> Integration',
    'label2_enable'           => 'New Label Engine',
    'label2_enable_help'      => 'Switch to the new label engine. <b>Note: You will need to save this setting before setting others.</b>',
    'label2_template'         => 'Template',
    'label2_template_help'    => 'Select which template to use for label generation',
    'label2_title'            => 'Гарчиг',
    'label2_title_help'       => 'The title to show on labels that support it',
    'label2_title_help_phold' => 'The placeholder <code>{COMPANY}</code> will be replaced with the asset&apos;s company name',
    'label2_asset_logo'       => 'Use Asset Logo',
    'label2_asset_logo_help'  => 'Use the logo of the asset&apos;s assigned company, rather than the value at <code>:setting_name</code>',
    'label2_1d_type'          => '1D Barcode Type',
    'label2_1d_type_help'     => 'Format for 1D barcodes',
    'label2_2d_type'          => '2D бар кодны төрөл',
    'label2_2d_type_help'     => 'Format for 2D barcodes',
    'label2_2d_target'        => '2D Barcode Target',
    'label2_2d_target_help'   => 'The URL the 2D barcode points to when scanned',
    'label2_fields'           => 'Field Definitions',
    'label2_fields_help'      => 'Fields can be added, removed, and reordered in the left column. For each field, multiple options for Label and DataSource can be added, removed, and reordered in the right column.',
    'help_asterisk_bold'    => 'Text entered as <code>**text**</code> will be displayed as bold',
    'help_blank_to_use'     => 'Leave blank to use the value from <code>:setting_name</code>',
    'help_default_will_use' => '<code>:default</code> will use the value from <code>:setting_name</code>. <br>Note that the value of the barcodes must comply with the respective barcode spec in order to be successfully generated. Please see <a href="https://snipe-it.readme.io/docs/barcodes">the documentation <i class="fa fa-external-link"></i></a> for more details. ',
    'default'               => 'Default',
    'none'                  => 'None',
    'google_callback_help' => 'This should be entered as the callback URL in your Google OAuth app settings in your organization&apos;s <strong><a href="https://console.cloud.google.com/" target="_blank">Google developer console <i class="fa fa-external-link" aria-hidden="true"></i></a></strong>.',
    'google_login'      => 'Google Workspace Login Settings',
    'enable_google_login'  => 'Enable users to login with Google Workspace',
    'enable_google_login_help'  => 'Users will not be automatically provisioned. They must have an existing account here AND in Google Workspace, and their username here must match their Google Workspace email address. ',
    'mail_reply_to' => 'Mail Reply-To Address',
    'mail_from' => 'Mail From Address',
    'database_driver' => 'Database Driver',
    'bs_table_storage' => 'Table Storage',
    'timezone' => 'Timezone',

];