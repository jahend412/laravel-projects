import axios from "axios";
import { Task, TaskFormData } from "../types";

const api = axios.create({
  baseURL: "http://localhost:8000/api",
  headers: {
    "Content-Type": "application/json",
  },
});

export const getTasks = () => api.get<Task[]>("/tasks");

export const getTask = (id: number) => api.get<Task>(`/tasks/${id}`);

export const createTask = (data: TaskFormData) =>
  api.post<Task>("/tasks", data);

export const updateTask = (id: number, data: Partial<TaskFormData>) =>
  api.put<Task>(`/tasks/${id}`, data);

export const deleteTask = (id: number) => api.delete(`/tasks/${id}`);

export const toggleComplete = (id: number, completed: boolean) =>
  api.put<Task>(`/tasks/${id}`, { completed: !completed });

export default api;
