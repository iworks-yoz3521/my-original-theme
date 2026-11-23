
document.addEventListener('DOMContentLoaded', function () {

    // ハンバーガーメニューボタンを取得
    const menuToggle = document.querySelector('.menu-toggle');

    // ナビゲーションメニューを取得
    const mainNav = document.querySelector('.main-nav');

    // ボタンとメニューが存在する場合のみ実行
    if (!menuToggle || !mainNav) {
        return;
    }

    // ボタンがクリックされたときの処理
    menuToggle.addEventListener('click', function () {

        // メニューの表示・非表示を切り替える
        const isOpen = mainNav.classList.toggle('is-open');

        // メニューの開閉状態を更新する
        menuToggle.setAttribute('aria-expanded', String(isOpen));

        // ボタンの説明とアイコンを切り替える
        menuToggle.setAttribute(
            'aria-label',
            isOpen ? 'メニューを閉じる' : 'メニューを開く'
        );

        const icon = menuToggle.querySelector('.menu-toggle-icon');

        if (icon) {
            icon.textContent = isOpen ? '×' : '☰';
        }

    });

});
