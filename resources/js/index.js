export default function filamentTimeRangeSlider() {
    return {
        mindate: 1000,
        maxdate: 7000,
        min: 100,
        max: 10000,
        minthumb: 0,
        maxthumb: 0,

        mintrigger() {
            this.mindate = Math.min(this.mindate, this.maxdate - 500);
            this.minthumb = ((this.mindate - this.min) / (this.max - this.min)) * 100;
        },

        maxtrigger() {
            this.maxdate = Math.max(this.maxdate, this.mindate + 500);
            this.maxthumb = 100 - (((this.maxdate - this.min) / (this.max - this.min)) * 100);
        },
    }

}