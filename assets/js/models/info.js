import Model from './model';
import Config from '../config';

export default Model.extend({
    defaults: {
        name: '',
        street: '',
        city: '',
        state: '',
        zip: '',
        phoneOne: '',
        phoneTwo: null,
    },
});
