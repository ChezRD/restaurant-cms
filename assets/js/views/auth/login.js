import {ItemView, TemplateCache} from 'backbone.marionette';
import Config from '../../config';
import MDLBehavior from '../../behaviors/mdl';
import FormBehavior from '../../behaviors/form';
import ModelErrorBehavior from '../../behaviors/model-error';
import NotifyService from '../../services/notify';
import LoadingService from '../../services/loading';

export default ItemView.extend({
    template: TemplateCache.get('login'),
    tagName: 'div',
    className: 'mdl-card mdl-cell mdl-cell--8-col mdl-shadow--2dp',
    modelUrl: 'login',

    events: {
        'submit form': 'handleSubmit',
    },

    behaviors: {
        mdl: {behaviorClass: MDLBehavior},
        form: {behaviorClass: FormBehavior},
        modelError: {behaviorClass: ModelErrorBehavior},
    },

    ui: {
        password: 'input[name=password]',
    },

    modelEvents: {
        error: 'clearPassword',
    },

    handleSubmit() {
        LoadingService.show();
        this.model.url = Config.apiRoot + '/login';
        this.model.set(this.form);

        this.model.save().done(response => {
            LoadingService.hide();
            NotifyService.success('Welcome back!');

            this.model.saveToStorage();
            window.location.hash = ' ';
        });
    },

    clearPassword() {
        this.ui.password.val('');
    },
});
