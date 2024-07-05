<!-- loader container script -->
<script>
    // $(document).ready(function() {
    //     const loaderContainer = document.querySelector('.loader-container');

    //     window.showLoader = function() {
    //         loaderContainer.style.display = 'flex'; // Show the loader container
    //     }

    //     window.hideLoader = function() {
    //         loaderContainer.style.display = 'none'; // Hide the loader container
    //     }
    // });

    function toggleNavbar() {
        var x = document.getElementById("navbar");
        if (x.className === "navbar") {
            x.className += " responsive";
        } else {
            x.className = "navbar";
        }
    }
    document.querySelectorAll('.faq-question').forEach(item => {
        item.addEventListener('click', () => {
            const parent = item.parentElement;
            const answer = parent.querySelector('.faq-answer');

            parent.classList.toggle('active');

            if (parent.classList.contains('active')) {
                answer.style.maxHeight = 'max-content';
                answer.style.paddingTop = '10px';
                answer.style.paddingBottom = '10px';
            } else {
                answer.style.maxHeight = '0';
                answer.style.paddingTop = '0';
                answer.style.paddingBottom = '0';
            }
        });
    });
</script>

<script src="<?= get_js() ?>components/number_section.js"></script>

<script src="<?= get_js() ?>header.js"></script>