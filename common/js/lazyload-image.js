window.addEventListener('load', function() {
    var lItem = document.getElementsByClassName('lazy-load replace'),
        pCount;

    window.addEventListener('scroll', view, false);
    window.addEventListener('resize', view, false);

    var observer = new MutationObserver(function() {
        if (lItem.length !== pCount) view();
    });
    observer.observe(document.body, {
        subtree: true,
        childList: true,
        attributes: true,
        characterData: true
    });

    view();

    function view() {

        requestAnimationFrame(function() {
            var wT = window.pageYOffset,
                wB = wT + window.innerHeight,
                cRect, pT, pB, p = 0;
            while (p < lItem.length) {
                cRect = lItem[p].getBoundingClientRect();
                pT = wT + cRect.top;
                pB = pT + cRect.height;
                if (wT < pB && wB > pT) {
                    loadFullImage(lItem[p]);
                    lItem[p].classList.remove('replace');
                } else p++;
            }
            pCount = lItem.length;
        });
    }

    function loadFullImage(item) {

        var href = item && (item.getAttribute('data-href') || item.href);
        if (!href) href = '/images/30.png';

        var img = new Image();
        // if (item.dataset) {
        //   img.srcset = item.dataset.srcset || '';
        //   img.sizes = item.dataset.sizes || '';
        // }
        img.src = href;
        img.className = 'reveal';
        addImg(href, item, img);
    }

    function addImg(href, item, img) {

        requestAnimationFrame(function() {
            if (href === item.href) {
                item.addEventListener('click', function(e) {
                    e.preventDefault();
                }, false);
            }

            var pImg = item.querySelector && item.querySelector('img.preview');

            item.insertBefore(img, pImg && pImg.nextSibling).addEventListener('animationend', function() {
                if (pImg) {
                    item.removeChild(pImg);
                }
                img.classList.remove('reveal');
            });
        });
    }

}, false);
