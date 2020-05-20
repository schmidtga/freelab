import axios from 'axios'

export default {
    all() {
        return axios.get('/api/projects')
    },
    find(id) {
        return axios.get(`/api/projects/${id}`)
    },
};