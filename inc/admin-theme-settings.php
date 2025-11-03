<?php
/**
 * 管理画面の外観の中にテーマ名のメニューを作る
 *
*/

function mobiki_add_theme_menu_item() {
    add_theme_page(
        __('Mobiki Theme Settings', 'mobiki'), // ページタイトル
        __('Mobiki Settings', 'mobiki'),       // メニュータイトル
        'manage_options',                       // 権限
        'mobiki-theme-settings',                // メニューのスラッグ
        'mobiki_theme_settings_page'            // コールバック関数
    );
}
add_action('admin_menu', 'mobiki_add_theme_menu_item');

// メディアアップローダーのスクリプトをエンキュー
function mobiki_enqueue_media_uploader() {
    if (isset($_GET['page']) && sanitize_text_field(wp_unslash($_GET['page'])) === 'mobiki-theme-settings') {
        wp_enqueue_media();

        // カスタムJavaScriptファイルをエンキュー
        wp_enqueue_script(
            'mobiki-admin-settings',
            get_template_directory_uri() . '/assets/js/admin-theme-settings.js',
            array('jquery', 'media-upload', 'thickbox'),
            '1.0.0',
            true
        );

        // JavaScript用の翻訳可能なテキストをローカライズ
        wp_localize_script('mobiki-admin-settings', 'mobikiAdminSettings', array(
            'selectImageTitle' => __('Select Profile Image', 'mobiki'),
            'useImageText' => __('Use this image', 'mobiki')
        ));
    }
}
add_action('admin_enqueue_scripts', 'mobiki_enqueue_media_uploader');

/**
 * テーマ設定ページの内容を表示
 */
function mobiki_theme_settings_page() {
    // 権限チェック
    if (!current_user_can('manage_options')) {
        wp_die(__('You do not have sufficient permissions to access this page.', 'mobiki'));
    }

    // 設定が保存された場合の処理
    if (isset($_POST['mobiki_save_settings'])) {
        // nonce検証(セキュリティチェック)
        check_admin_referer('mobiki_settings_nonce');

        // 電話番号の保存
        if (isset($_POST['mobiki_phone_number'])) {
            update_theme_mod('mobiki_phone_number', sanitize_text_field($_POST['mobiki_phone_number']));
        }
        // メールアドレスの保存
        if (isset($_POST['mobiki_contact_email'])) {
            update_theme_mod('mobiki_contact_email', sanitize_email($_POST['mobiki_contact_email']));
        }
        // プロフィール画像の保存
        if (isset($_POST['mobiki_profile_image'])) {
            update_theme_mod('mobiki_profile_image', esc_url_raw($_POST['mobiki_profile_image']));
        }

        // プロフィール説明の保存
        if (isset($_POST['mobiki_profile_description'])) {
            update_theme_mod('mobiki_profile_description', sanitize_textarea_field($_POST['mobiki_profile_description']));
        }

        echo '<div class="updated"><p>' . __('Settings saved.', 'mobiki') . '</p></div>';
    }

    // 現在の設定値を取得
    $phone_number = get_theme_mod('mobiki_phone_number', '');
    $contact_email = get_theme_mod('mobiki_contact_email', '');
    $profile_description = get_theme_mod('mobiki_profile_description', '');
    $profile_image = get_theme_mod('mobiki_profile_image', '');
    ?>
    <div class="wrap">
        <h1><?php esc_html_e('Mobiki Theme Settings', 'mobiki'); ?></h1>
        <p><?php esc_html_e('Configure the settings for the Mobiki theme.', 'mobiki'); ?></p>
        <p><?php esc_html_e('You will register the phone number, email address, and icon to be used in the theme profile.', 'mobiki'); ?></p>
        <form method="post" action="">
            <?php wp_nonce_field('mobiki_settings_nonce'); ?>
            <table class="form-table">
                <tr valign="top">
                    <th scope="row"><?php esc_html_e('Phone Number', 'mobiki'); ?></th>
                    <td>
                        <input type="text" name="mobiki_phone_number" value="<?php echo esc_attr($phone_number); ?>" class="regular-text" />
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row"><?php esc_html_e('Contact Email', 'mobiki'); ?></th>
                    <td>
                        <input type="email" name="mobiki_contact_email" value="<?php echo esc_attr($contact_email); ?>" class="regular-text" />
                    </td>
                </tr>

                <tr valign="top">
                    <th scope="row"><?php esc_html_e('Profile Description', 'mobiki'); ?></th>
                    <td>
                        <?php
                        $profile_description = get_theme_mod('mobiki_profile_description', '');
                        ?>
                        <textarea name="mobiki_profile_description" rows="5" class="large-text"><?php echo esc_textarea($profile_description); ?></textarea>
                        <p class="description"><?php esc_html_e('Enter a description for your profile.', 'mobiki'); ?></p>
                    </td>
                </tr>

                <tr valign="top">
                    <th scope="row"><?php esc_html_e('Profile Image', 'mobiki'); ?></th>
                    <td>
                        <?php
                        $profile_image = get_theme_mod('mobiki_profile_image', '');
                        ?>
                        <input type="hidden" name="mobiki_profile_image" id="mobiki_profile_image" value="<?php echo esc_attr($profile_image); ?>" />
                        <button type="button" class="button" id="mobiki_upload_image_button"><?php esc_html_e('Select Image', 'mobiki'); ?></button>
                        <button type="button" class="button" id="mobiki_remove_image_button" <?php echo empty($profile_image) ? 'style="display:none;"' : ''; ?>><?php esc_html_e('Remove Image', 'mobiki'); ?></button>
                        <div id="mobiki_profile_image_preview" style="margin-top: 10px;">
                            <?php if ($profile_image): ?>
                                <img src="<?php echo esc_url($profile_image); ?>" style="max-width: 200px; height: auto;" />
                            <?php endif; ?>
                        </div>
                    </td>
                </tr>

            </table>
            <input type="submit" name="mobiki_save_settings" class="button button-primary" value="<?php esc_attr_e('Save Settings', 'mobiki'); ?>" />
        </form>
    </div>
    <?php
}
