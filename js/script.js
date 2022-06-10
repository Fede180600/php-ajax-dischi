const app = new Vue({
    el: '#root',
    data: {
        albums : [],
    },
    created() {
        axios
        .get("http://localhost/php-ajax-dischi/api/server.php")
        .then((resp) => {
            this.albums = resp.data;
        })
    },
})