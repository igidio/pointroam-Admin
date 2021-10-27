export default {
    methods: {
        pad2(n) {
            return (n < 10 ? '0' : '') + n;
        },

        //FUNCIONES COLECTIVAS
        todayDate(){
            var date = new Date();
            var month = this.pad2(date.getMonth()+1);//months (0-11)
            var day = this.pad2(date.getDate());//day (1-31)
            var year= date.getFullYear();

            var today = year+"-"+month+"-"+day;
            return(today);
        }
    }
};