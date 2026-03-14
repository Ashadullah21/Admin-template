@extends('layouts.dashboard')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/app-kanban.css') }}">
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Apps</li>
    <li class="breadcrumb-item active" aria-current="page">Kanban</li>
@endsection

@section('page-title', 'Boards')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-end mb-4">
        <div class="d-flex gap-2">
            <div class="task-users d-flex align-items-center me-3 border-end pe-3">
                <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=U1">
                <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=U2">
                <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=U3">
                <button class="btn btn-sm btn-light rounded-circle border p-0 ms-1 d-flex align-items-center justify-content-center text-muted" style="width: 24px; height: 24px;"><i class="bi bi-plus" style="font-size: 1rem;"></i></button>
            </div>
            <button class="btn btn-light bg-white border shadow-sm px-3"><i class="bi bi-filter"></i> Filter</button>
            <button class="btn btn-primary px-3 shadow-sm rounded"><i class="bi bi-plus-lg me-1"></i> New Task</button>
        </div>
    </div>

    <!-- Kanban Columns -->
    <div class="kanban-board">
        <!-- Todo Column -->
        <div class="kanban-column">
            <div class="board-header mb-1">
                <div class="d-flex align-items-center gap-2">
                    <span class="bg-secondary rounded-circle" style="width: 10px; height: 10px;"></span>
                    To Do
                </div>
                <span class="badge bg-light text-dark border text-muted">3</span>
            </div>
            
            <div class="kanban-card">
                <div class="d-flex justify-content-between align-items-start mb-2">
                    <span class="tag bg-danger-subtle text-danger">High Priority</span>
                    <i class="bi bi-three-dots text-muted cursor-pointer"></i>
                </div>
                <div class="kanban-card-title">Design System Setup</div>
                <div class="kanban-card-desc">Create the foundational design tokens and components in Figma.</div>
                <div class="d-flex justify-content-between align-items-center mt-3 border-top pt-3">
                    <div class="text-muted small d-flex gap-3">
                        <span><i class="bi bi-paperclip"></i> 2</span>
                        <span><i class="bi bi-chat-dots"></i> 5</span>
                    </div>
                    <div class="task-users">
                        <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=U1">
                    </div>
                </div>
            </div>
            
            <div class="kanban-card">
                <div class="d-flex justify-content-between align-items-start mb-2">
                    <span class="tag bg-info-subtle text-info">Design</span>
                    <i class="bi bi-three-dots text-muted cursor-pointer"></i>
                </div>
                <div class="kanban-card-title">Landing Page Mockups</div>
                <div class="kanban-card-desc">Design the hero section and feature highlights for the new Ash product.</div>
                <div class="d-flex justify-content-between align-items-center mt-3 border-top pt-3">
                    <div class="text-muted small d-flex gap-3">
                        <span><i class="bi bi-paperclip"></i> 1</span>
                        <span><i class="bi bi-chat-dots"></i> 0</span>
                    </div>
                    <div class="task-users">
                        <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=U2">
                    </div>
                </div>
            </div>
            
            <button class="btn btn-light border-dashed w-100 text-muted shadow-sm" style="border-style: dashed;"><i class="bi bi-plus-lg"></i> Add Card</button>
        </div>

        <!-- In Progress Column -->
        <div class="kanban-column">
            <div class="board-header mb-1">
                <div class="d-flex align-items-center gap-2">
                    <span class="bg-primary rounded-circle" style="width: 10px; height: 10px;"></span>
                    In Progress
                </div>
                <span class="badge bg-light text-dark border text-muted">2</span>
            </div>
            
            <div class="kanban-card border-primary border-start border-4">
                <div class="d-flex justify-content-between align-items-start mb-2">
                    <span class="tag bg-warning-subtle text-warning">Development</span>
                    <i class="bi bi-three-dots text-muted cursor-pointer"></i>
                </div>
                <div class="kanban-card-title">Sidebar Implementation</div>
                <div class="kanban-card-desc">Implement the mobile responsive sidebar navigation.</div>
                <div class="progress mt-3" style="height: 6px;">
                    <div class="progress-bar bg-primary" style="width: 65%;"></div>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-3 border-top pt-3">
                    <div class="text-muted small d-flex gap-3">
                        <span><i class="bi bi-calendar"></i> Oct 15</span>
                    </div>
                    <div class="task-users">
                        <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=U3">
                        <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=U1">
                    </div>
                </div>
            </div>
        </div>

        <!-- Review Column -->
        <div class="kanban-column">
            <div class="board-header mb-1">
                <div class="d-flex align-items-center gap-2">
                    <span class="bg-warning rounded-circle" style="width: 10px; height: 10px;"></span>
                    In Review
                </div>
                <span class="badge bg-light text-dark border text-muted">1</span>
            </div>
            
            <div class="kanban-card">
                <div class="d-flex justify-content-between align-items-start mb-2">
                    <span class="tag bg-success-subtle text-success">Testing</span>
                    <i class="bi bi-three-dots text-muted cursor-pointer"></i>
                </div>
                <div class="kanban-card-title">Authentication Flow</div>
                <div class="kanban-card-desc">Verify the OAuth login and registration edge cases.</div>
                <div class="d-flex justify-content-between align-items-center mt-3 border-top pt-3">
                    <div class="text-muted small d-flex gap-3">
                        <span class="text-danger"><i class="bi bi-flag"></i> Blocked</span>
                    </div>
                    <div class="task-users">
                        <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=U2">
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Done Column -->
        <div class="kanban-column">
            <div class="board-header mb-1">
                <div class="d-flex align-items-center gap-2">
                    <span class="bg-success rounded-circle" style="width: 10px; height: 10px;"></span>
                    Done
                </div>
                <span class="badge bg-light text-dark border text-muted">5</span>
            </div>
            
            <div class="kanban-card bg-light border-0">
                <div class="d-flex justify-content-between align-items-start mb-2">
                    <span class="tag bg-secondary-subtle text-secondary">Setup</span>
                    <i class="bi bi-three-dots text-muted cursor-pointer"></i>
                </div>
                <div class="kanban-card-title text-muted text-decoration-line-through">Initialize Repository</div>
                <div class="kanban-card-desc">Set up Laravel project with Vite and Tailwind config.</div>
            </div>
            
            <div class="kanban-card bg-light border-0">
                <div class="d-flex justify-content-between align-items-start mb-2">
                    <span class="tag bg-secondary-subtle text-secondary">Setup</span>
                    <i class="bi bi-three-dots text-muted cursor-pointer"></i>
                </div>
                <div class="kanban-card-title text-muted text-decoration-line-through">Database Schema</div>
                <div class="kanban-card-desc">Write initial migrations and factories.</div>
            </div>
        </div>
    </div>
</div>
@endsection
