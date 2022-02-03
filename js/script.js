const App = new Vue(
    {
        el: '#app',
        data: {
            cards: []
        },
        created() {
        axios.get('http://localhost/php-ajax-dischi/server/controller-api.php')
        .then((result) => {
            this.cards = result.data;
            console.log(result);
        })
        .catch((error) => { console.log(error);
        });
        }
    }
);