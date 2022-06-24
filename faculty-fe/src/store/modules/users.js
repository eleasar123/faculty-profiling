import axios from "axios";

const state = () => ({
    users: null,
});

const mutations = {
    setUser(state, data) {
        console.log(data)
        state.users = JSON.parse(data);
        sessionStorage.setItem('user_session', data);
    }
};

const actions = {
    retrieveUserProfile() {
        return axios.get('user/').then((result) => {
           
            console.log(result)
            return result;
        }).catch((err) => {
            return err.response;
        });
    },

    retrieveUserProfileById( ) {
        return axios.get(`user/${JSON.parse(sessionStorage.user_session).id}`).then((result) => {
            //commit('setUser', result.data);
            return result;
        }).catch((err) => {
            return err.response;
        });
    },

    createUser({ dispatch }, data) {
        return axios
          .post("user/create", data)
          .then(async (result) => {
            try {
              await dispatch("retrieveUserProfile");
              return result;
            } catch (error) {
              return error;
            }
          })
          .catch((err) => {
            return err.response;
          });
      },

    updateUser({ dispatch,commit }, data) {
        return axios
            .post('user/edit/', data)
            .then(async (result) => {
                try {
                  await dispatch("retrieveUserProfile");
                  commit;
                  return result;
                }catch(error){
                    return error;
                }
            })
            .catch((err) => {
              return err.response;
            });
    },

    updateUserProfile({commit,dispatch}, file) {
        console.log(file)
        return axios
        
            .post('user/editProfile/', file, {
                headers: {
                    "Content-Type": "multipart/form-data",
                },
            })
            .then(async (result) => {
                try {
                    console.log(result)
                    //commit('setUser', JSON.stringify(result.data));
                  const data = await dispatch("retrieveUserProfileById");
                    console.log(data.data.user)
                  sessionStorage.setItem('user_session', JSON.stringify(data.data.user))
                  //sessionStorage.user_session.profile = "Lorem ipsum";
                  commit;
                  return result;
                }catch(error){
                    return error;
                }
            })
            .catch((err) => {
              return err.response;
            });
    },

    deleteUser({commit}, props) {
        console.log(props)
        //const index = state.users.indexOf(props);
        return axios
        .delete("user/delete/" + props)
        .then((result) => {
          //  state.users.splice(index, 1);
          commit;
            return result;
        })
        .catch((err) => {
            return err.response;
        });
     },


   
};

const getters = {
    userProfilesAll: (state) => state.users,
};

export default {
    state,
    actions,
    mutations,
    getters,
};