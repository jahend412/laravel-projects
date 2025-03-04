import axios from "axios";

const api = axios.create({
  baseUrl: "http://localhost:8000/api",
  headers: {
    "Content-Type": "application/json",
  },
});

export const getTasks = () => api.get("/tasks");
export const getTask = (id) => api.get(`/tasks/${id}`);
export const createTask = (data) => api.post("/tasks", data);
export const updateTask = (id, data) => api.put(`/tasks/${id}`, data);
export const deleteTask = (id) => api.delete(`/tasks/${id}`);
export const toggleComplete = (id, completed) =>
  api.put(`/tasks/${id}`, { completed: !completed });

export default api;
