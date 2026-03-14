document.addEventListener('DOMContentLoaded', function() {
    const sidebarMiniClass = 'sidebar-mini';
    const body = document.body;
    const navMiniToggle = document.getElementById('navbarSidebarToggle');
    
    // Mini Sidebar functionality
    function toggleMiniSidebar() {
        body.classList.toggle(sidebarMiniClass);
        const isMini = body.classList.contains(sidebarMiniClass);
        localStorage.setItem('sidebar-mini', isMini);
        
        if (navMiniToggle) {
            const navIcon = navMiniToggle.querySelector('i');
            if (navIcon) {
                const navClass1 = isMini ? 'bi-text-indent-left' : 'bi-text-indent-right';
                const navClass2 = isMini ? 'bi-text-indent-right' : 'bi-text-indent-left';
                navIcon.classList.replace(navClass1, navClass2);
            }
        }
    }

    // Check local storage for sidebar state
    if (localStorage.getItem('sidebar-mini') === 'true') {
        body.classList.add(sidebarMiniClass);
        if (navMiniToggle) {
            const navIcon = navMiniToggle.querySelector('i');
            if (navIcon) navIcon.classList.replace('bi-text-indent-left', 'bi-text-indent-right');
        }
    }

    if (navMiniToggle) {
        navMiniToggle.addEventListener('click', toggleMiniSidebar);
    }

    // Theme Customizer Logic
    const customizerToggle = document.getElementById('customizerToggle');
    const customizerPanel = document.getElementById('customizerPanel');
    const customizerClose = document.getElementById('customizerClose');
    const customizerBackdrop = document.getElementById('customizerBackdrop');
    const resetCustomizer = document.getElementById('resetCustomizer');

    function toggleCustomizer() {
        if (!customizerPanel) return;
        customizerPanel.classList.toggle('show');
        customizerBackdrop.classList.toggle('show');
    }

    if (customizerToggle) customizerToggle.addEventListener('click', toggleCustomizer);
    if (customizerClose) customizerClose.addEventListener('click', toggleCustomizer);
    if (customizerBackdrop) customizerBackdrop.addEventListener('click', toggleCustomizer);

    // Primary Color Selection
    const colorOptions = document.querySelectorAll('#primaryColorOptions .color-option');
    colorOptions.forEach(opt => {
        opt.addEventListener('click', function() {
            const color = this.dataset.color;
            document.documentElement.style.setProperty('--primary-color', color);
            localStorage.setItem('primary-color', color);
            
            colorOptions.forEach(c => c.classList.remove('active'));
            this.classList.add('active');
        });
    });

    // Theme Mode Selection
    const themeOptions = document.querySelectorAll('.theme-mode-option');
    themeOptions.forEach(opt => {
        opt.addEventListener('click', function() {
            const theme = this.dataset.theme;
            document.documentElement.setAttribute('data-theme', theme);
            localStorage.setItem('theme-mode', theme);
            
            themeOptions.forEach(t => t.classList.remove('active'));
            this.classList.add('active');
        });
    });

    // Load saved preferences
    const savedColor = localStorage.getItem('primary-color');
    if (savedColor) {
        document.documentElement.style.setProperty('--primary-color', savedColor);
        colorOptions.forEach(c => {
            if (c.dataset.color === savedColor) {
                colorOptions.forEach(o => o.classList.remove('active'));
                c.classList.add('active');
            }
        });
    }

    const savedTheme = localStorage.getItem('theme-mode');
    if (savedTheme) {
        document.documentElement.setAttribute('data-theme', savedTheme);
        themeOptions.forEach(t => {
            if (t.dataset.theme === savedTheme) {
                themeOptions.forEach(o => o.classList.remove('active'));
                t.classList.add('active');
            }
        });
    }

    if (resetCustomizer) {
        resetCustomizer.addEventListener('click', function() {
            localStorage.removeItem('primary-color');
            localStorage.removeItem('theme-mode');
            location.reload();
        });
    }

    // Submenu Toggle
    document.querySelectorAll('.submenu-toggle').forEach(item => {
        item.addEventListener('click', function(e) {
            const parent = this.parentElement;
            const submenu = this.nextElementSibling;
            parent.classList.toggle('open');
            submenu.classList.toggle('show');
        });
    });

    // Mobile Sidebar Toggle
    const mobileToggle = document.getElementById('mobileSidebarToggle');
    const mobileClose = document.getElementById('mobileSidebarClose');
    const sidebar = document.getElementById('sidebar');
    const backdrop = document.getElementById('sidebarBackdrop');

    function toggleMobileSidebar() {
        if (!sidebar || !backdrop) return;
        sidebar.classList.toggle('mobile-show');
        backdrop.classList.toggle('show');
        // Prevent body scroll when sidebar is open on mobile
        if (sidebar.classList.contains('mobile-show')) {
            document.body.style.overflow = 'hidden';
        } else {
            document.body.style.overflow = '';
        }
    }

    if (mobileToggle) {
        mobileToggle.addEventListener('click', function(e) {
            e.stopPropagation();
            toggleMobileSidebar();
        });
    }

    if (mobileClose) {
        mobileClose.addEventListener('click', toggleMobileSidebar);
    }

    if (backdrop) {
        backdrop.addEventListener('click', toggleMobileSidebar);
    }

    // Profile Dropdown
    const profileToggle = document.getElementById('profileDropdownToggle');
    const profileMenu = document.getElementById('profileDropdownMenu');

    // Notification Dropdown
    const notificationToggle = document.getElementById('notificationToggle');
    const notificationMenu = document.getElementById('notificationMenu');

    // Search Dropdown
    const searchInput = document.getElementById('searchInput');
    const searchDropdown = document.getElementById('searchDropdown');
    const searchBoxToggle = document.getElementById('searchBoxToggle');

    if (profileToggle && profileMenu) {
        profileToggle.addEventListener('click', function(e) {
            e.stopPropagation();
            if (notificationMenu) notificationMenu.classList.remove('show');
            if (searchDropdown) searchDropdown.classList.remove('show');
            profileMenu.classList.toggle('show');
        });
    }

    if (notificationToggle && notificationMenu) {
        notificationToggle.addEventListener('click', function(e) {
            e.stopPropagation();
            if (profileMenu) profileMenu.classList.remove('show');
            if (searchDropdown) searchDropdown.classList.remove('show');
            notificationMenu.classList.toggle('show');
        });
    }

    // Search Dropdown Logic

    if (searchBoxToggle && searchDropdown) {
        searchBoxToggle.addEventListener('click', function(e) {
            e.stopPropagation();
            if (profileMenu) profileMenu.classList.remove('show');
            if (notificationMenu) notificationMenu.classList.remove('show');
            searchDropdown.classList.toggle('show');
            if(searchInput) searchInput.focus();
        });
        
        // if user clicks input directly prevent bubbling so it doesn't close
        if(searchInput) {
            searchInput.addEventListener('click', e => e.stopPropagation());
        }
    }

    // Close dropdowns/sidebar when clicking outside
    document.addEventListener('click', function(event) {
        if (sidebar && sidebar.classList.contains('mobile-show') && !sidebar.contains(event.target) && mobileToggle && !mobileToggle.contains(event.target)) {
            toggleMobileSidebar();
        }
        if (profileMenu && profileToggle && !profileMenu.contains(event.target) && !profileToggle.contains(event.target)) {
            profileMenu.classList.remove('show');
        }
        if (notificationMenu && notificationToggle && !notificationMenu.contains(event.target) && !notificationToggle.contains(event.target)) {
            notificationMenu.classList.remove('show');
        }
        if (searchDropdown && searchBoxToggle && !searchDropdown.contains(event.target) && !searchBoxToggle.contains(event.target)) {
            searchDropdown.classList.remove('show');
        }
    });

    // Page Loader Hiding
    const hideLoader = function() {
        document.body.classList.add('loaded');
        setTimeout(() => {
            const loader = document.getElementById('page-loader');
            if (loader) loader.style.display = 'none';
        }, 600);
    };

    if (document.readyState === 'complete') {
        hideLoader();
    } else {
        window.addEventListener('load', hideLoader);
    }

    // Functional Buttons/Filters Feedback
    document.querySelectorAll('.btn, .form-select, .form-check-input').forEach(element => {
        element.addEventListener('change', function() {
            // Simulate working filter
            console.log('Filter changed:', this.value);
            // Show a temporary "Filtering..." state
            const mainContent = document.querySelector('.main-wrapper');
            if (mainContent) {
                mainContent.style.opacity = '0.5';
                setTimeout(() => {
                    mainContent.style.opacity = '1';
                }, 300);
            }
        });
        element.addEventListener('click', function(e) {
            if (this.tagName === 'BUTTON' && !this.classList.contains('dropdown-toggle')) {
                // Simulate action
                const originalText = this.innerHTML;
                const clickAction = this.innerText.trim().toLowerCase();
                
                if (['save changes', 'upgrade now', 'sign up', 'sign in', 'purchase now'].includes(clickAction)) {
                    this.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Processing...';
                    this.disabled = true;
                    setTimeout(() => {
                        this.innerHTML = '<i class="bi bi-check-circle"></i> Done!';
                        this.classList.add('btn-success');
                        setTimeout(() => {
                            this.innerHTML = originalText;
                            this.classList.remove('btn-success');
                            this.disabled = false;
                        }, 2000);
                    }, 1200);
                }
            }
        });
    });

    // Handle Map Image Loading
    const mapImg = document.querySelector('.map-container img');
    if (mapImg) {
        mapImg.addEventListener('load', function() {
            const loader = this.previousElementSibling;
            if (loader && loader.classList.contains('position-absolute')) {
                loader.style.opacity = '0';
                setTimeout(() => loader.style.display = 'none', 500);
            }
            this.style.opacity = '1';
        });
        // If image is already cached
        if (mapImg.complete) {
            mapImg.dispatchEvent(new Event('load'));
        }
    }
});
