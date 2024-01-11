export default function timeRangeSlider({ state, min, max, mininterval, stepinterval }) {
    return {
        state,
        minhour: 0,
        minminute: 0,
        maxhour: 0,
        maxminute: 0,
        hourcap: 23,
        minutecap: 59,
        mindate: 0,
        maxdate: 1440,
        min: min ?? 0,
        max: max ?? 1440,
        stepinterval: stepinterval ?? 10,
        mininterval: mininterval ?? 60,
        minthumb: 0,
        maxthumb: 0,

        init() {
            this.mintrigger();
            this.maxtrigger();
        },

        mintrigger() {
            this.mindate = Math.min(this.mindate, this.maxdate - this.mininterval);
            this.minhour = this.getHourFromDate(this.mindate);
            this.minminute = this.getMinuteFromDate(this.mindate);

            this.minthumb = ((this.mindate - this.min) / (this.max - this.min)) * 100;
            this.updateState();
        },

        maxtrigger() {
            this.maxdate = Math.max(this.maxdate, this.mindate + this.mininterval);
            this.maxhour = this.getHourFromDate(this.maxdate);
            this.maxminute = this.getMinuteFromDate(this.maxdate);
            this.maxthumb = 100 - (((this.maxdate - this.min) / (this.max - this.min)) * 100);
            this.updateState();
        },

        inputtrigger() {
            this.maxdate = this.maxhour * 60 + this.maxminute;
            this.mindate = this.minhour * 60 + this.minminute;
            this.mintrigger();
            this.maxtrigger();
        },

        getHourFromDate(date) {
            return String((Math.floor(date / 60))).padStart(2, '0');
        },

        getMinuteFromDate(date) {
            return String(date % 60).padStart(2, '0');
        },

        updateState: function () {
            this.state = {
                start: this.minhour + ':' + this.minminute,
                end: this.maxhour + ':' + this.maxminute
            };
        },
    }

}