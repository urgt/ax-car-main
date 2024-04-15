import { createApp } from 'vue'
import Alert from './Alert.vue';
import Counter from './Counter.vue';
import Search from './Search.vue'

createApp({
    components: {
        Alert,
        Counter,
        Search
    }
}).mount('#wrapper')

