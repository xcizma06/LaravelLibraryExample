export default {
    collapsibleSelector: '[collapsible]',
    collapseTargetSelector: '[collapse-target]',
    collapseButtonSelector: '[collapse-button]',
    collapsedClass: 'collapsed',

    init() {
        document.querySelectorAll(this.collapsibleSelector)?.forEach((collapsible) => {
            let button = collapsible.querySelector(this.collapseButtonSelector);

            button?.addEventListener('click', (event) => {
                event.preventDefault();

                button.classList.toggle('active');
                collapsible.classList.toggle(this.collapsedClass);
            })
        })
    }
}
