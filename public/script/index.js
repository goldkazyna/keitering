document.addEventListener('DOMContentLoaded', function() {
    // Скрипт для работы гамбургер меню
        const hamburger = document.querySelector('.hamburger');
        const mobileNav = document.querySelector('.mobile-nav');
        const mobileNavOverlay = document.querySelector('.mobile-nav-overlay');
        const closeMenu = document.querySelector('.close-menu');
        const body = document.body;

        function openMenu() {
            hamburger.classList.add('active');
            mobileNav.classList.add('active');
            mobileNavOverlay.classList.add('active');
            body.style.overflow = 'hidden';
        }

        function closeMenuFunc() {
            hamburger.classList.remove('active');
            mobileNav.classList.remove('active');
            mobileNavOverlay.classList.remove('active');
            body.style.overflow = '';
        }

        hamburger.addEventListener('click', openMenu);
        closeMenu.addEventListener('click', closeMenuFunc);
        mobileNavOverlay.addEventListener('click', closeMenuFunc);

        // Закрываем меню при клике на ссылку
        const mobileLinks = mobileNav.querySelectorAll('a');
        mobileLinks.forEach(link => {
            link.addEventListener('click', function() {
                closeMenuFunc();
            });
        });

        // Закрываем меню при нажатии Escape
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                closeMenuFunc();
            }
        });

        // Обработка дропдаунов в мобильном меню
        const mobileDropdowns = mobileNav.querySelectorAll('.dropdown');
        mobileDropdowns.forEach(dropdown => {
            const toggle = dropdown.querySelector('.dropdown-toggle');
            toggle.addEventListener('click', function(e) {
                e.preventDefault();
                dropdown.classList.toggle('active');
            });
        });


    // Управление видео (остается без изменений)
    const videoContainers = document.querySelectorAll('.video-container');
    videoContainers.forEach(container => {
        const video = container.querySelector('video');
        const playPauseBtn = container.querySelector('.play-pause-btn');

        video.pause();

        playPauseBtn.addEventListener('click', function(e) {
            e.stopPropagation();

            if (video.paused) {
                video.play();
                this.innerHTML = '<span style="display:block; text-align:center">⏸</span>';
                this.classList.add('playing');
            } else {
                video.pause();
                this.innerHTML = '<span style="display:block; text-align:center">▶</span>';
                this.classList.remove('playing');
            }
        });

        container.addEventListener('mouseenter', function() {
            if (!video.paused) {
                playPauseBtn.style.opacity = '1';
            }
        });

        container.addEventListener('mouseleave', function() {
            if (!video.paused) {
                playPauseBtn.style.opacity = '0';
            }
        });

        video.addEventListener('play', function() {
            videoContainers.forEach(otherContainer => {
                if (otherContainer !== container) {
                    const otherVideo = otherContainer.querySelector('video');
                    const otherBtn = otherContainer.querySelector('.play-pause-btn');
                    otherVideo.pause();
                    otherBtn.textContent = '▶';
                    otherBtn.classList.remove('playing');
                }
            });
        });
    });

    // Логика слайдера со стрелочками
    const slider = document.querySelector('.reviews-slider');
    const prevBtn = document.querySelector('.slider-arrow-prev');
    const nextBtn = document.querySelector('.slider-arrow-next');
    const cards = document.querySelectorAll('.reviewCadr');
    const container = document.querySelector('.reviews-slider-container');

    let currentIndex = 0;
    const cardWidth = 413 + 10; // width + gap
    let isMobile = window.innerWidth <= 768;

    // Функция для показа/скрытия стрелок
    function updateArrowsVisibility() {
        if (isMobile) {
            // На мобилках скрываем стрелки
            prevBtn.style.display = 'none';
            nextBtn.style.display = 'none';
        } else {
            // На десктопе показываем стрелки с логикой
            const maxIndex = calculateMaxIndex();
            prevBtn.style.display = currentIndex === 0 ? 'none' : 'flex';
            nextBtn.style.display = currentIndex >= maxIndex ? 'none' : 'flex';
        }
    }

    // Функция для расчета максимального индекса
    function calculateMaxIndex() {
        if (isMobile) {
            return cards.length - 1;
        } else {
            const containerWidth = container.offsetWidth;
            const totalCardsWidth = cards.length * cardWidth;

            if (totalCardsWidth <= containerWidth) {
                return 0;
            }

            const maxScroll = totalCardsWidth - containerWidth;
            return Math.ceil(maxScroll / cardWidth);
        }
    }

    // Функция обновления позиции слайдера
    function updateSlider() {
        const maxIndex = calculateMaxIndex();

        if (currentIndex > maxIndex) {
            currentIndex = maxIndex;
        }

        if (isMobile) {
            const card = cards[currentIndex];
            const scrollPosition = card.offsetLeft - (container.offsetWidth / 2) + (card.offsetWidth / 2);
            slider.scrollTo({
                left: scrollPosition,
                behavior: 'smooth'
            });
        } else {
            const translateX = -currentIndex * cardWidth;
            slider.style.transform = `translateX(${translateX}px)`;
        }

        updateArrowsVisibility();
    }

    // Обработчики для стрелок
    prevBtn.addEventListener('click', () => {
        if (currentIndex > 0) {
            currentIndex--;
            updateSlider();
        }
    });

    nextBtn.addEventListener('click', () => {
        const maxIndex = calculateMaxIndex();
        if (currentIndex < maxIndex) {
            currentIndex++;
            updateSlider();
        }
    });

    // Инициализация
    updateSlider();

    // Обновление при изменении размера окна
    window.addEventListener('resize', () => {
        isMobile = window.innerWidth <= 768;
        const maxIndex = calculateMaxIndex();

        if (currentIndex > maxIndex) {
            currentIndex = maxIndex;
        }

        updateSlider();
    });

    // Обработчик для скролла на мобилках
    if (isMobile) {
        let scrollTimeout;
        slider.addEventListener('scroll', () => {
            clearTimeout(scrollTimeout);
            scrollTimeout = setTimeout(() => {
                const sliderRect = slider.getBoundingClientRect();
                let closestCard = 0;
                let minDistance = Infinity;

                cards.forEach((card, index) => {
                    const cardRect = card.getBoundingClientRect();
                    const distance = Math.abs(cardRect.left - sliderRect.left);
                    if (distance < minDistance) {
                        minDistance = distance;
                        closestCard = index;
                    }
                });

                currentIndex = closestCard;
            }, 100);
        });
    }
});