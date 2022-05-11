import axios from "axios";
const state = () => ({
    
    userToken: JSON.parse(sessionStorage.getItem('user_session')),
    userDetails: null,
});

const mutations = {
    setUserToken(state, data) {
        console.log(data)
        sessionStorage.setItem("user_session", JSON.stringify(data[1][0].account));
        sessionStorage.setItem("token",  JSON.stringify(data[2][0].token));
    //     axios.defaults.headers.common.Authorization = `bearer ${
    //   JSON.parse(data).access_token
    // }`;
    },

    clearUserSession() {
        sessionStorage.removeItem("user_session");
        localStorage.removeItem("user_details");
        sessionStorage.clear();
        axios.defaults.headers.common.Authorization = "";
        location.reload();
    },

    setUserDetails(state, data) {
        state.userDetails = JSON.parse(data);
        localStorage.setItem('user_details', data);
    }
};

const actions = {
    loginLocally({ commit }, data) {
        return axios
            .post('login', data)
            .then((result) => {
                console.log(result);
                commit("setUserToken", result.data);
                return result;
            })
            .catch((err) => {
                return err.response;
            });
    },

    retrieveUserData({ state, commit }) {
        return axios.get(`user/profile/${JSON.parse(state.userToken).empId}`).then((result) => {

            commit('setUserDetails', JSON.stringify(result.data));
            return result;
        }).catch((err) => {
            return err.response;
        });
    },

    logout({ commit }) {
        commit("clearUserSession");
        this.$router.push({
            path: window.location.host.split(':')[0] == "localhost" ? "/login" : ""
        });
    },
};

const getters = {
    loggedUserToken: (state) => state.userToken,
    userDetailsAll: (state) => state.userDetails
};

export default {
    state,
    actions,
    mutations,
    getters,
};