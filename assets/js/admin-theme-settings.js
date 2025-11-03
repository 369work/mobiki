/**
 * 管理画面のテーマ設定ページ用JavaScript
 */
jQuery(document).ready(function($) {
    var mediaUploader;

    // 画像選択ボタンのクリックイベント
    $('#mobiki_upload_image_button').click(function(e) {
        e.preventDefault();

        // メディアアップローダーが既に存在する場合は再利用
        if (mediaUploader) {
            mediaUploader.open();
            return;
        }

        // メディアアップローダーの設定
        mediaUploader = wp.media({
            title: mobikiAdminSettings.selectImageTitle,
            button: { text: mobikiAdminSettings.useImageText },
            multiple: false
        });

        // 画像が選択されたときの処理
        mediaUploader.on('select', function() {
            var attachment = mediaUploader.state().get('selection').first().toJSON();
            var imageUrl = attachment.url;

            // 隠しフィールドに画像URLを設定
            $('#mobiki_profile_image').val(imageUrl);

            // XSS対策: jQueryのattr()を使用して安全に挿入
            var imgElement = $('<img>').attr({
                'src': imageUrl,
                'style': 'max-width: 200px; height: auto;'
            });

            // プレビュー領域を更新
            $('#mobiki_profile_image_preview').empty().append(imgElement);

            // 削除ボタンを表示
            $('#mobiki_remove_image_button').show();
        });

        mediaUploader.open();
    });

    // 画像削除ボタンのクリックイベント
    $('#mobiki_remove_image_button').click(function(e) {
        e.preventDefault();

        // 隠しフィールドをクリア
        $('#mobiki_profile_image').val('');

        // プレビュー領域をクリア
        $('#mobiki_profile_image_preview').empty();

        // 削除ボタンを非表示
        $(this).hide();
    });
});
