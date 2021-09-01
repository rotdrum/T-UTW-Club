new Vue({
    el: '#report',
    data: {
        pages: 0,
        limitPages: 4
    },
    methods: {
        reversePage() {
            this.pages--;
            this.pages = this.pages < 1 ? this.pages = 1 : this.pages;

        },
        nextPage() {
            this.pages++;
            this.pages = this.pages > this.limitPages ? this.pages = this.limitPages : this.pages;
        },
        print() {
            window.print();
        },
        showAllPages() {
            this.pages = this.pages == 0 ? this.pages = 1 : this.pages = 0;
        }

    }
})
