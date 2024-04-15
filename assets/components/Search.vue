<template>
    <div>
        <input type="text" v-model="searchTerm" @input="searchPosts" placeholder="Введите поисковой запрос...">
        <ul v-if="searchResults">
            <li v-for="post in searchResults" :key="post.id">
                <a :href="post.link">{{ post.title.rendered }}</a>
            </li>
        </ul>
        <p v-if="isEmptySearchResults">По вашему запросу ничего не найдено"</p>
        
    </div>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            searchTerm: '',
            searchResults: [],
            isEmptySearchResults : false
        };
    },
    methods: {
        searchPosts() {
            if (this.searchTerm.length >= 3) {
                let formData = new FormData();
                formData.append('action', 'search_posts');
                formData.append('searchTerm', this.searchTerm);

                axios.post(
                    ajaxurl,
                    formData, 
                    {
                        headers: {
                            'Content-Type': 'multipart/form-data'
                        }
                    }
                ).then(response => {
                    this.searchResults = response.data;
                    if (this.searchResults.length === 0) {
                        this.isEmptySearchResults = true;
                    } else {
                        this.isEmptySearchResults = false;
                    }
                }).catch(error => {
                    console.error('Ошибка:', error);
                });
            } else {
                this.searchResults = [];
            }
        }
    }
};
</script>