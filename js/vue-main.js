new Vue({
    el: '#wait',
    data: () => ({
        displayMinutes: 4,
        displaySeconds: 59,
        displayProgress: 0,
        statusRegister: false
    }),
    mounted() {
        this.showRemaining();
    },
    methods: {
        showRemaining() {
            const timer = setInterval(() => {
                this.displaySeconds--;
                this.displayProgress+=0.34;
                this.displaySeconds = this.displaySeconds < 10 ? "0" + this.displaySeconds : this.displaySeconds;

                if(this.displaySeconds == 0 && this.displayMinutes != 0) {
                    this.displayMinutes--;
                    this.displayMinutes = this.displayMinutes < 10 ? "0" + this.displayMinutes : this.displayMinutes;
                    this.displaySeconds = 59;
                }
                if(this.displaySeconds == 0 && this.displayMinutes == 0) {
                    this.statusRegister = true;
                    clearInterval(timer);
                    return
                }
            }, 1000)
        }
    }
})