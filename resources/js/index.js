export default function filamentTimeRangeSlider({ state, min, max, mininterval }) {
    return {
        state,
        mindate: 1000,
        maxdate: 7000,
        min: min ?? 100,
        max: max ?? 10000,
        mininterval: mininterval ?? 500,
        minthumb: 0,
        maxthumb: 0,

        mintrigger() {
            this.mindate = Math.min(this.mindate, this.maxdate - this.mininterval);
            this.minthumb = ((this.mindate - this.min) / (this.max - this.min)) * 100;
            this.updateState();
        },

        maxtrigger() {
            this.maxdate = Math.max(this.maxdate, this.mindate + this.mininterval);
            this.maxthumb = 100 - (((this.maxdate - this.min) / (this.max - this.min)) * 100);
            this.updateState();
        },

        updateState: function () {
            let state = {
                mindate: 0,
                maxdate: 99
            };

            state.maxdate = this.maxdate;
            state.mindate = this.mindate;

            this.state = state;
        },
    }

}