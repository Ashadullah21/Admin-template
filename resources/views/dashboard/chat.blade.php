@extends('layouts.dashboard')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/app-chat.css') }}">
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Apps</li>
    <li class="breadcrumb-item active" aria-current="page">Chat</li>
@endsection

@section('page-title', 'Messenger')

@section('content')
<div class="chat-container">
    <div class="chat-sidebar">
        <div class="p-3 border-bottom d-flex justify-content-between align-items-center">
            <h5 class="fw-bold mb-0">Messages</h5>
            <button class="btn btn-sm btn-light border rounded-pill px-3 shadow-sm"><i class="bi bi-plus-lg me-1"></i> New</button>
        </div>
        <div class="chat-search position-relative">
            <i class="bi bi-search chat-search-icon"></i>
            <input type="text" placeholder="Search messages...">
        </div>
        <div class="chat-list">
            <!-- Chat Items -->
            <div class="chat-item active" onclick="switchChat('Felix Wong', 'online', 'https://api.dicebear.com/7.x/avataaars/svg?seed=Felix')">
                <div class="chat-avatar-wrap">
                    <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=Felix" class="chat-avatar">
                    <div class="status-badge status-online"></div>
                </div>
                <div class="flex-grow-1 overflow-hidden">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <span class="fw-bold text-dark">Felix Wong</span>
                        <span class="text-muted" style="font-size: 0.7rem;">12:45 PM</span>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="mb-0 text-muted small text-truncate pe-2">Hey, did you see the new dashboard UI?</p>
                        <span class="unread-badge">2</span>
                    </div>
                </div>
            </div>

            <div class="chat-item" onclick="switchChat('Aia Smith', 'offline', 'https://api.dicebear.com/7.x/avataaars/svg?seed=Aia')">
                <div class="chat-avatar-wrap">
                    <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=Aia" class="chat-avatar">
                    <div class="status-badge status-offline"></div>
                </div>
                <div class="flex-grow-1 overflow-hidden">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <span class="fw-bold text-dark">Aia Smith</span>
                        <span class="text-muted" style="font-size: 0.7rem;">Yesterday</span>
                    </div>
                    <p class="mb-0 text-muted small text-truncate pe-2">The client is happy with the progress. Let's schedule a meeting.</p>
                </div>
            </div>

            <div class="chat-item" onclick="switchChat('Design Team', 'online', 'https://api.dicebear.com/7.x/initials/svg?seed=DT')">
                <div class="chat-avatar-wrap">
                    <img src="https://api.dicebear.com/7.x/initials/svg?seed=DT" class="chat-avatar">
                    <div class="status-badge status-online"></div>
                </div>
                <div class="flex-grow-1 overflow-hidden">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <span class="fw-bold text-dark">Design Team</span>
                        <span class="text-muted" style="font-size: 0.7rem;">Yesterday</span>
                    </div>
                    <p class="mb-0 text-muted small text-truncate pe-2"><span class="fw-medium">Sarah:</span> Here are the updated mockups.</p>
                </div>
            </div>
            
            <div class="chat-item">
                <div class="chat-avatar-wrap">
                    <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=Max" class="chat-avatar">
                    <div class="status-badge status-offline"></div>
                </div>
                <div class="flex-grow-1 overflow-hidden">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <span class="fw-bold text-dark">Max Johnson</span>
                        <span class="text-muted" style="font-size: 0.7rem;">Oct 12</span>
                    </div>
                    <p class="mb-0 text-muted small text-truncate pe-2">Thanks! I'll review it by tomorrow.</p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="chat-main">
        <div class="chat-header">
            <div class="d-flex align-items-center gap-3">
                <div class="position-relative">
                    <img id="header-avatar" src="https://api.dicebear.com/7.x/avataaars/svg?seed=Felix" class="chat-avatar shadow-sm" style="width: 40px; height: 40px;">
                    <span id="header-status-dot" class="position-absolute bottom-0 end-0 p-1 bg-success border border-white rounded-circle"></span>
                </div>
                <div>
                    <h6 id="header-name" class="mb-0 fw-bold">Felix Wong</h6>
                    <span id="header-status-text" class="text-muted small" style="font-size: 0.75rem;">Active now</span>
                </div>
            </div>
            <div class="d-flex gap-2">
                <button class="btn btn-light border rounded-circle" style="width: 36px; height: 36px; padding: 0;"><i class="bi bi-telephone text-primary"></i></button>
                <button class="btn btn-light border rounded-circle" style="width: 36px; height: 36px; padding: 0;"><i class="bi bi-camera-video text-primary"></i></button>
                <div class="dropdown">
                    <button class="btn btn-light border rounded-circle" data-bs-toggle="dropdown" style="width: 36px; height: 36px; padding: 0;"><i class="bi bi-three-dots-vertical"></i></button>
                    <ul class="dropdown-menu dropdown-menu-end shadow border-0 mt-2">
                        <li><a class="dropdown-item" href="#"><i class="bi bi-person me-2"></i> View Profile</a></li>
                        <li><a class="dropdown-item" href="#"><i class="bi bi-bell-slash me-2"></i> Mute Notifications</a></li>
                        <li><a class="dropdown-item" href="#"><i class="bi bi-search me-2"></i> Search in Chat</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-trash me-2"></i> Delete Chat</a></li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="chat-messages" id="chatMessages">
            <div class="text-center my-3">
                <span class="badge bg-light text-muted border px-3 py-2 rounded-pill fw-normal">Today, 10:30 AM</span>
            </div>
            
            <div class="message-wrapper received">
                <div class="message received">
                    Hi Jerry, have you finished the UI for the chat module?
                </div>
                <div class="message-time">10:35 AM</div>
            </div>
            
            <div class="message-wrapper sent">
                <div class="message sent">
                    Yes Felix! I'm just polishing the responsive behavior now. It looks great.
                </div>
                <div class="message-time">10:48 AM <i class="bi bi-check2-all text-primary ms-1"></i></div>
            </div>
            
            <div class="message-wrapper received">
                <div class="message received">
                    Great! Share the link once it's deployed. The client is asking for early access.
                </div>
                <div class="message-time">11:02 AM</div>
            </div>
            
            <div class="message-wrapper received">
                <div class="message received">
                    Also, let's sync up later today regarding the Kanban board updates.
                </div>
                <div class="message-time">11:03 AM</div>
            </div>
        </div>
        
        <div class="chat-input-area">
            <div class="chat-input-box" id="inputContainer">
                <i class="bi bi-emoji-smile icon-btn fs-5"></i>
                <i class="bi bi-paperclip icon-btn fs-5"></i>
                <input type="text" id="chatInput" placeholder="Type your message..." autocomplete="off">
                <button class="btn-send shadow-sm" id="btnSend">
                    <i class="bi bi-send-fill fs-6" style="margin-left: -2px; margin-top: 1px;"></i>
                </button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('js/app-chat.js') }}"></script>
@endsection
