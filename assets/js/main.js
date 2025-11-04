/**
 * mobiki Theme Scripts
 * @package mobiki
 * Enhanced with error handling and additional features
 */

(function() {
    'use strict';

    // エラーログ機能
    const logError = (error, context = '') => {
        if (console && console.error) {
            console.error(`[Mobiki Theme Error] ${context}:`, error);
        }
    };

    // デバウンス関数
    const debounce = (func, wait) => {
        let timeout;
        return function executedFunction(...args) {
            const later = () => {
                clearTimeout(timeout);
                func(...args);
            };
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
        };
    };

    // スムーズスクロール機能（エラーハンドリング付き）
    const smoothScrollTo = (target, offset = 0) => {
        try {
            if (!target) {
                throw new Error('Target element not found');
            }

            const targetPosition = target.offsetTop - offset;

            // スクロール可能かチェック
            if (typeof window.scrollTo !== 'function') {
                // フォールバック
                document.documentElement.scrollTop = targetPosition;
                return;
            }

            window.scrollTo({
                top: targetPosition,
                behavior: 'smooth'
            });
        } catch (error) {
            logError(error, 'smoothScrollTo');
            // フォールバック: 通常のスクロール
            if (target) {
                target.scrollIntoView();
            }
        }
    };

    // Intersection Observer（エラーハンドリング付き）
    const initScrollAnimations = () => {
        try {
            if (!('IntersectionObserver' in window)) {
                // フォールバック: 全要素を即座に表示
                const workItems = document.querySelectorAll('.work-item');
                workItems.forEach(item => item.classList.add('visible'));
                return;
            }

            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -80px 0px'
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    try {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('visible');
                            // パフォーマンス向上のため、一度表示されたら監視を停止
                            observer.unobserve(entry.target);
                        }
                    } catch (error) {
                        logError(error, 'IntersectionObserver callback');
                    }
                });
            }, observerOptions);

            // アニメーション対象要素の監視
            const animatedElements = document.querySelectorAll('.work-item, .blog-item, .service-item');
            animatedElements.forEach(item => {
                try {
                    observer.observe(item);
                } catch (error) {
                    logError(error, 'Observer.observe');
                    // フォールバック
                    item.classList.add('visible');
                }
            });

        } catch (error) {
            logError(error, 'initScrollAnimations');
        }
    };

    // スムーズスクロールリンクの初期化
    const initSmoothScrollLinks = () => {
        try {
            const anchors = document.querySelectorAll('a[href^="#"]');

            anchors.forEach(anchor => {
                try {
                    anchor.addEventListener('click', function(e) {
                        try {
                            const href = this.getAttribute('href');
                            if (!href || href === '#') return;

                            e.preventDefault();
                            const target = document.querySelector(href);

                            if (target) {
                                // ヘッダーの高さを考慮したオフセット
                                const headerOffset = 80;
                                smoothScrollTo(target, headerOffset);

                                // フォーカス管理（アクセシビリティ向上）
                                if (target.tabIndex < 0) {
                                    target.tabIndex = -1;
                                }
                                target.focus();
                            }
                        } catch (error) {
                            logError(error, 'Smooth scroll click handler');
                        }
                    });
                } catch (error) {
                    logError(error, 'Adding click listener to anchor');
                }
            });
        } catch (error) {
            logError(error, 'initSmoothScrollLinks');
        }
    };

    // スクロールトップボタンの初期化
    const initScrollToTopButton = () => {
        try {
            const scrollToTopBtn = document.querySelector('.scroll-to-top');

            if (!scrollToTopBtn) return;

            let isScrolling = false;

            // スクロールイベント（デバウンス付き）
            const handleScroll = debounce(() => {
                try {
                    const scrollPosition = window.pageYOffset || document.documentElement.scrollTop;
                    const shouldShow = scrollPosition > 300;

                    if (shouldShow && !scrollToTopBtn.classList.contains('visible')) {
                        scrollToTopBtn.classList.add('visible');
                        scrollToTopBtn.setAttribute('aria-hidden', 'false');
                    } else if (!shouldShow && scrollToTopBtn.classList.contains('visible')) {
                        scrollToTopBtn.classList.remove('visible');
                        scrollToTopBtn.setAttribute('aria-hidden', 'true');
                    }
                } catch (error) {
                    logError(error, 'Scroll handler');
                }
            }, 100);

            window.addEventListener('scroll', handleScroll, { passive: true });

            // クリックイベント
            scrollToTopBtn.addEventListener('click', (e) => {
                try {
                    e.preventDefault();
                    if (isScrolling) return; // 重複実行防止

                    isScrolling = true;
                    smoothScrollTo(document.body, 0);

                    // スクロール完了後にフラグをリセット
                    setTimeout(() => {
                        isScrolling = false;
                    }, 1000);

                } catch (error) {
                    logError(error, 'Scroll to top click handler');
                    isScrolling = false;
                }
            });

            // キーボードサポート
            scrollToTopBtn.addEventListener('keydown', (e) => {
                if (e.key === 'Enter' || e.key === ' ') {
                    e.preventDefault();
                    scrollToTopBtn.click();
                }
            });

        } catch (error) {
            logError(error, 'initScrollToTopButton');
        }
    };

    // フォーム送信エラーハンドリング
    const initFormHandling = () => {
        try {
            const forms = document.querySelectorAll('form');

            forms.forEach(form => {
                form.addEventListener('submit', function(e) {
                    try {
                        // 基本的なバリデーション
                        const requiredFields = form.querySelectorAll('[required]');
                        let hasErrors = false;

                        requiredFields.forEach(field => {
                            if (!field.value.trim()) {
                                field.classList.add('error');
                                hasErrors = true;
                            } else {
                                field.classList.remove('error');
                            }
                        });

                        if (hasErrors) {
                            e.preventDefault();
                            // 最初のエラーフィールドにフォーカス
                            const firstError = form.querySelector('.error');
                            if (firstError) {
                                firstError.focus();
                            }
                        }
                    } catch (error) {
                        logError(error, 'Form validation');
                    }
                });
            });
        } catch (error) {
            logError(error, 'initFormHandling');
        }
    };

    // 画像遅延読み込み（パフォーマンス向上）
    const initLazyLoading = () => {
        try {
            if ('IntersectionObserver' in window) {
                const imageObserver = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            const img = entry.target;
                            if (img.dataset.src) {
                                img.src = img.dataset.src;
                                img.classList.remove('lazy');
                                imageObserver.unobserve(img);
                            }
                        }
                    });
                });

                const lazyImages = document.querySelectorAll('img[data-src]');
                lazyImages.forEach(img => imageObserver.observe(img));
            }
        } catch (error) {
            logError(error, 'initLazyLoading');
        }
    };

    // フッターナビゲーションメニューの初期化（アクセシビリティ対応）
    const initFooterNavigation = () => {
        try {
            const navToggle = document.querySelector('.footer-nav-toggle');
            const navMenu = document.querySelector('.footer-nav-menu');
            const navClose = document.querySelector('.footer-nav-close');

            console.log('[Footer Nav] navToggle:', navToggle);
            console.log('[Footer Nav] navMenu:', navMenu);
            console.log('[Footer Nav] navClose:', navClose);

            if (!navToggle || !navMenu) {
                console.warn('[Footer Nav] Required elements not found');
                return;
            }

            console.log('[Footer Nav] Initialization started');

            // オーバーレイ要素を取得
            const overlay = document.querySelector('.footer-nav-overlay');
            if (!overlay) {
                console.error('[Footer Nav] Overlay element not found');
                return;
            }

            console.log('[Footer Nav] overlay:', overlay);

            // フォーカス可能な要素を取得
            const getFocusableElements = () => {
                const focusableSelectors = [
                    '.footer-nav-close',
                    '.footer-nav-links a',
                    'button:not([disabled])',
                    'a[href]:not([disabled])'
                ].join(', ');
                return Array.from(navMenu.querySelectorAll(focusableSelectors))
                    .filter(el => el.offsetParent !== null); // 表示されている要素のみ
            };

            // メニューを開く
            const openMenu = () => {
                navMenu.classList.add('active');
                overlay.classList.add('active');
                navToggle.classList.add('active');
                navToggle.setAttribute('aria-expanded', 'true');
                navMenu.setAttribute('aria-hidden', 'false');
                overlay.setAttribute('aria-hidden', 'false');
                document.body.style.overflow = 'hidden';

                // 最初のフォーカス可能な要素（閉じるボタン）にフォーカス
                setTimeout(() => {
                    if (navClose) {
                        navClose.focus();
                    }
                }, 100);

                console.log('[Footer Nav] Menu opened');
            };

            // メニューを閉じる
            const closeMenu = () => {
                navMenu.classList.remove('active');
                overlay.classList.remove('active');
                navToggle.classList.remove('active');
                navToggle.setAttribute('aria-expanded', 'false');
                navMenu.setAttribute('aria-hidden', 'true');
                overlay.setAttribute('aria-hidden', 'true');
                document.body.style.overflow = '';

                // トグルボタンにフォーカスを戻す
                navToggle.focus();

                console.log('[Footer Nav] Menu closed');
            };

            // フォーカストラップ（メニュー内でフォーカスをループ）
            const trapFocus = (e) => {
                if (!navMenu.classList.contains('active')) return;

                const focusableElements = getFocusableElements();
                if (focusableElements.length === 0) return;

                const firstElement = focusableElements[0];
                const lastElement = focusableElements[focusableElements.length - 1];

                // Tabキーでのフォーカス移動
                if (e.key === 'Tab') {
                    if (e.shiftKey) {
                        // Shift + Tab（逆方向）
                        if (document.activeElement === firstElement) {
                            e.preventDefault();
                            lastElement.focus();
                        }
                    } else {
                        // Tab（順方向）
                        if (document.activeElement === lastElement) {
                            e.preventDefault();
                            firstElement.focus();
                        }
                    }
                }

                // 矢印キーでのナビゲーション
                if (e.key === 'ArrowDown' || e.key === 'ArrowUp') {
                    e.preventDefault();
                    const currentIndex = focusableElements.indexOf(document.activeElement);

                    if (e.key === 'ArrowDown') {
                        const nextIndex = (currentIndex + 1) % focusableElements.length;
                        focusableElements[nextIndex].focus();
                    } else {
                        const prevIndex = currentIndex <= 0 ? focusableElements.length - 1 : currentIndex - 1;
                        focusableElements[prevIndex].focus();
                    }
                }
            };

            // トグルボタンのクリック
            navToggle.addEventListener('click', (e) => {
                e.stopPropagation();
                if (navMenu.classList.contains('active')) {
                    closeMenu();
                } else {
                    openMenu();
                }
            });

            // トグルボタンのキーボード操作（Enter/Space）
            navToggle.addEventListener('keydown', (e) => {
                if (e.key === 'Enter' || e.key === ' ') {
                    e.preventDefault();
                    navToggle.click();
                }
            });

            // 閉じるボタンのクリック
            if (navClose) {
                navClose.addEventListener('click', (e) => {
                    e.stopPropagation();
                    closeMenu();
                });

                // 閉じるボタンのキーボード操作
                navClose.addEventListener('keydown', (e) => {
                    if (e.key === 'Enter' || e.key === ' ') {
                        e.preventDefault();
                        closeMenu();
                    }
                });
            }

            // オーバーレイのクリック
            overlay.addEventListener('click', () => {
                closeMenu();
            });

            // キーボードイベント
            document.addEventListener('keydown', (e) => {
                // Escapeキーで閉じる
                if (e.key === 'Escape' && navMenu.classList.contains('active')) {
                    e.preventDefault();
                    closeMenu();
                    return;
                }

                // フォーカストラップ
                if (navMenu.classList.contains('active')) {
                    trapFocus(e);
                }
            });

            // メニュー内のリンクをクリックしたら閉じる
            const navLinks = navMenu.querySelectorAll('.footer-nav-links a');
            navLinks.forEach(link => {
                link.addEventListener('click', () => {
                    closeMenu();
                });

                // Enterキーでリンクをアクティブ化
                link.addEventListener('keydown', (e) => {
                    if (e.key === 'Enter') {
                        e.preventDefault();
                        link.click();
                    }
                });
            });

            console.log('[Footer Nav] Accessibility features enabled');

        } catch (error) {
            logError(error, 'initFooterNavigation');
        }
    };

    // メイン初期化関数
    const init = () => {
        try {
            initScrollAnimations();
            initSmoothScrollLinks();
            initScrollToTopButton();
            initFormHandling();
            initLazyLoading();
            initFooterNavigation(); // フッターナビゲーションを初期化

            // 初期化完了をログ出力
            if (console && console.log) {
                console.log('[Mobiki Theme] Initialization completed successfully');
            }
        } catch (error) {
            logError(error, 'Main initialization');
        }
    };

    // DOM読み込み完了後に実行
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        // すでに読み込み完了している場合
        init();
    }

    // ページ離脱時のクリーンアップ
    window.addEventListener('beforeunload', () => {
        try {
            // 必要に応じてクリーンアップ処理を追加
        } catch (error) {
            logError(error, 'Cleanup');
        }
    });

})();