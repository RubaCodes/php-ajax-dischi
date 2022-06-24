const app = new Vue({
  el: '#app',
  data: {
    albums: [],
  },
  methods: {},
  computed: {
    getGenres() {
      const genres = new Set();
      genres.add('All');
      this.albums.forEach((elm) => {
        genres.add(elm.genre);
      });
      console.log(genres);
      return Array.from(genres);
    },
  },
  created() {
    axios
      .get('http://localhost:8888/php-ajax-dischi/server/api.php')
      .then((response) => {
        this.albums = response.data;
      })
      .catch((error) => {
        console.log(error);
      });
  },
});
