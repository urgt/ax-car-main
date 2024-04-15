<template>
    <button @click="getMessage()">Click me!</button>
</template>

<script>
import axios from 'axios';
export default {
    data() {
        return {
            message: 'I am an alert.'
        };
    },
    methods: {
        getMessage() {
            jQuery.ajax({
                type: "post",
                url: `${window.location.origin}/wp-admin/admin-ajax.php`,
                data: {
                    action: "my_ajax_action",  
                },
                complete: function (response) {
                    console.log(JSON.parse(response.responseText).data);
                },
            });
        }
    }
};
</script>

<style></style>