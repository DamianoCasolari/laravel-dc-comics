
createApp({
    data() {
        return {
            pageLoad: false
        }
    },
    methods: {
        sameHeight() {
            const cards = document.getElementsByClassName('my_card');
            let maxHeight = 0;

            for (let i = 0; i < cards.length; i++) {
                const cardHeight = cards[i].offsetHeight;
                if (cardHeight > maxHeight) {
                    maxHeight = cardHeight;
                }
            }

            for (let i = 0; i < cards.length; i++) {
                cards[i].style.minHeight = maxHeight + 'px';
            }
        }
    },
    mounted() {
        window.addEventListener('load', () => {
            this.pageLoad = true;
            this.$nextTick(() => {
                this.sameHeight();
            });
        });
    }
}).mount('#app')