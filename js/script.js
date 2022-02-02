const App = new Vue(
    {
        el: '#app',
        data: {
        albumList: []
        },
        created() {
        axios.get('http://localhost/php-ajax-dischi/server/controller-api.php').then((result) => {
            this.albumList = result;
        }).catch((error) => { console.log(error); });
        }
    }
);