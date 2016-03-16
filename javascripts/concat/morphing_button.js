/*
 * classie - class helper functions
 * from bonzo https://github.com/ded/bonzo
 *
 * classie.has( elem, 'my-class' ) -> true/false
 * classie.add( elem, 'my-new-class' )
 * classie.remove( elem, 'my-unwanted-class' )
 * classie.toggle( elem, 'my-class' )
 */
(function(window) {
    'use strict';

    function classReg(className) {
        return new RegExp("(^|\\s+)" + className + "(\\s+|$)");
    }
    var hasClass, addClass, removeClass;
    if ('classList' in document.documentElement) {
        hasClass = function(elem, c) {
            return elem.classList.contains(c);
        };
        addClass = function(elem, c) {
            elem.classList.add(c);
        };
        removeClass = function(elem, c) {
            elem.classList.remove(c);
        };
    } else {
        hasClass = function(elem, c) {
            return classReg(c).test(elem.className);
        };
        addClass = function(elem, c) {
            if (!hasClass(elem, c)) {
                elem.className = elem.className + ' ' + c;
            }
        };
        removeClass = function(elem, c) {
            elem.className = elem.className.replace(classReg(c), ' ');
        };
    }

    function toggleClass(elem, c) {
        var fn = hasClass(elem, c) ? removeClass : addClass;
        fn(elem, c);
    }
    var classie = {
        hasClass: hasClass,
        addClass: addClass,
        removeClass: removeClass,
        toggleClass: toggleClass,
        has: hasClass,
        add: addClass,
        remove: removeClass,
        toggle: toggleClass
    };
    if (typeof define === 'function' && define.amd) {
        define(classie);
    } else {
        window.classie = classie;
    }
})(window);;;
(function(window) {
    'use strict';
    var transEndEventNames = {
            'WebkitTransition': 'webkitTransitionEnd',
            'MozTransition': 'transitionend',
            'OTransition': 'oTransitionEnd',
            'msTransition': 'MSTransitionEnd',
            'transition': 'transitionend'
        },
        transEndEventName = transEndEventNames[Modernizr.prefixed('transition')],
        support = {
            transitions: Modernizr.csstransitions
        };

    function extend(a, b) {
        for (var key in b) {
            if (b.hasOwnProperty(key)) {
                a[key] = b[key];
            }
        }
        return a;
    }

    function UIMorphingButton(el, options) {
        this.el = el;
        this.options = extend({}, this.options);
        extend(this.options, options);
        this._init();
    }
    UIMorphingButton.prototype.options = {
        closeEl: '',
        onBeforeOpen: function() {
            return false;
        },
        onAfterOpen: function() {
            return false;
        },
        onBeforeClose: function() {
            return false;
        },
        onAfterClose: function() {
            return false;
        }
    }
    UIMorphingButton.prototype._init = function() {
        this.button = this.el.querySelector('button');
        this.expanded = false;
        this.contentEl = this.el.querySelector('.morph-content');
        this._initEvents();
    }
    UIMorphingButton.prototype._initEvents = function() {
        var self = this;
        this.button.addEventListener('click', function() {
            self.toggle();
        });
        if (this.options.closeEl !== '') {
            var closeEl = this.el.querySelector(this.options.closeEl);
            if (closeEl) {
                closeEl.addEventListener('click', function() {
                    self.toggle();
                });
            }
        }
    }
    UIMorphingButton.prototype.toggle = function() {
        if (this.isAnimating) return false;
        if (this.expanded) {
            this.options.onBeforeClose();
        } else {
            classie.addClass(this.el, 'active');
            this.options.onBeforeOpen();
        }
        this.isAnimating = true;
        var self = this,
            onEndTransitionFn = function(ev) {
                if (ev.target !== this) return false;
                if (support.transitions) {
                    if (self.expanded && ev.propertyName !== 'opacity' || !self.expanded && ev.propertyName !== 'width' && ev.propertyName !== 'height' && ev.propertyName !== 'left' && ev.propertyName !== 'top') {
                        return false;
                    }
                    this.removeEventListener(transEndEventName, onEndTransitionFn);
                }
                self.isAnimating = false;
                if (self.expanded) {
                    classie.removeClass(self.el, 'active');
                    self.options.onAfterClose();
                } else {
                    self.options.onAfterOpen();
                }
                self.expanded = !self.expanded;
            };
        if (support.transitions) {
            this.contentEl.addEventListener(transEndEventName, onEndTransitionFn);
        } else {
            onEndTransitionFn();
        }
        var buttonPos = this.button.getBoundingClientRect();
        classie.addClass(this.contentEl, 'no-transition');
        this.contentEl.style.left = 'auto';
        this.contentEl.style.top = 'auto';
        setTimeout(function() {
            self.contentEl.style.left = buttonPos.left + 'px';
            self.contentEl.style.top = buttonPos.top + 'px';
            if (self.expanded) {
                classie.removeClass(self.contentEl, 'no-transition');
                classie.removeClass(self.el, 'open');
            } else {
                setTimeout(function() {
                    classie.removeClass(self.contentEl, 'no-transition');
                    classie.addClass(self.el, 'open');
                }, 25);
            }
        }, 25);
    }
    window.UIMorphingButton = UIMorphingButton;
})(window);


(function() {
    var docElem = window.document.documentElement,
        didScroll, scrollPosition;

    function noScrollFn() {
        window.scrollTo(scrollPosition ? scrollPosition.x : 0, scrollPosition ? scrollPosition.y : 0);
    }

    function noScroll() {
        window.removeEventListener('scroll', scrollHandler);
        window.addEventListener('scroll', noScrollFn);
    }

    function scrollFn() {
        window.addEventListener('scroll', scrollHandler);
    }

    function canScroll() {
        window.removeEventListener('scroll', noScrollFn);
        scrollFn();
    }

    function scrollHandler() {
        if (!didScroll) {
            didScroll = true;
            setTimeout(function() {
                scrollPage();
            }, 60);
        }
    };

    function scrollPage() {
        scrollPosition = {
            x: window.pageXOffset || docElem.scrollLeft,
            y: window.pageYOffset || docElem.scrollTop
        };
        didScroll = false;
    };
    scrollFn();
    [].slice.call(document.querySelectorAll('.morph-button')).forEach(function(bttn) {
        var el = bttn.parentNode.querySelector('.morph-button');
        new UIMorphingButton(bttn, {
            closeEl: '.icon-close',
            onBeforeOpen: function() {
                noScroll();
            },
            onAfterOpen: function() {
                canScroll();
                classie.addClass(document.body, 'noscroll');
                classie.addClass(el, 'scroll');
            },
            onBeforeClose: function() {
                classie.removeClass(document.body, 'noscroll');
                classie.removeClass(el, 'scroll');
                noScroll();
            },
            onAfterClose: function() {
                canScroll();
            }
        });
    });
})();
