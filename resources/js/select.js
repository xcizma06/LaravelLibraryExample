import TomSelect from 'tom-select';

export default {
    searchSelector: '[search-select]',

    init() {
        document.querySelectorAll(this.searchSelector)?.forEach((element) => {
            new TomSelect(element, {
                searchable: true
            });
        })
    }
}
