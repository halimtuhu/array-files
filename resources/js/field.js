Nova.booting((Vue, router) => {
    Vue.component('index-array-files', require('./components/IndexField'));
    Vue.component('detail-array-files', require('./components/DetailField'));
    Vue.component('form-array-files', require('./components/FormField'));
})
