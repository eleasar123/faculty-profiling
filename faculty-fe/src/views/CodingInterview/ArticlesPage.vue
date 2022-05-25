<template>
  <v-container class="ma-6">
    <v-btn @click="create=true"> New Article</v-btn>
    <!-- <v-container fluid >
     
    </v-container> -->
     <v-data-table :headers="headers" :loading="loading" :items="articles" >
       <template v-slot:[`item.actions`] ="{item}">
        <v-btn @click="editArticle(item)">Edit</v-btn>
        <v-btn @click="deleteArticle(item)">Delete</v-btn>
       </template>
      </v-data-table>
    <!-- v-if="create==false || edit == false" -->
    <v-container v-if="create==true || edit == true">
      <v-form>
        <v-text-field dense solo v-model="articleContent"> </v-text-field>

        <v-btn @click.prevent="submit">Submit</v-btn>
      </v-form>
    </v-container>
  </v-container>
</template>
<script>
//import { defineComponent } from '@vue/composition-api'
// import moment from 'moment'; reserved for dates formatting
export default{
  // name: "ArticlesPage",
    data(){
        return{
            search:false,
            headers: [
              {
              text: "ID", value: "id"
              },
               {
              text: "Article", value: "article_content_snippet"
              },
               {
              text: "CreatedAt", value: "created_at"
               },
              {
                text: "Actions", value: "actions"
              } 
            ],
            loading: false,
            articles: [],
            edit: false,
            create: false,
            articleContent: '',
            id: "",
        }
    },
    created(){
        this.retrieveArticles();
    },
    methods:{
        async submit(){
            console.log(this.articleContent)
            console.log(this.create, this.update)
            const articleContent = this.articleContent;
            const id = this.id;
            const data = {
              id,
              articleContent
            }
            if(this.edit == true){
            const returnedData = this.$store.dispatch('editArticle', data);
            if(returnedData.data =="success"){
              this.create = false;
              this.retrieveArticles();
              
            }
          }else if(this.create == true){
            const returnedData = this.$store.dispatch('createArticle', data);
            if(returnedData){
              this.create = false;
              this.retrieveArticles()
            }
          }
        },
        async retrieveArticles() {
            const articles = await this.$store.dispatch('getArticles')
            console.log(articles)
            for(const item of articles.data){
              this.articles.push(item)
            }
          
        },
        async editArticle(item){
          console.log(item)
          const returnedData = this.$store.dispatch('editArticles', item)
          console.log(returnedData)
          this.retrieveArticles()
        },

        async deleteArticle(item){
          const returnedData = this.$store.dispatch('deleteArticles', item);
          console.log(returnedData)
          this.retrieveArticles()
        }
    }
}
</script>
