import {Router} from 'backbone.routing';
import AuthService from '../services/auth';
import HomeRoute from '../routes/home';

export default Router.extend({
    routes: {
        '': 'index',
        'home': 'home',
    },

    initialize(options = {}) {
        this.container = options.container;
    },

    index() {
        AuthService.request('isAuthed').then(isAuthed => {
            let nextHash = (isAuthed) ? 'home' : 'login';
            location.hash = nextHash;
        });
    },

    home() {
        return new HomeRoute({container: this.container});
    },
});
