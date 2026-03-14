@extends('layouts.dashboard')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/app-mail.css') }}">
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Apps</li>
    <li class="breadcrumb-item active" aria-current="page">Mail</li>
@endsection

@section('page-title', 'Email Service')

@section('content')
<div class="mail-container">
    <div class="mail-sidebar">
        <button class="btn btn-primary mail-btn-compose">
            <i class="bi bi-pencil-square me-2"></i> Compose
        </button>
        <div class="mail-nav-title">Folders</div>
        <nav class="mb-4">
            <a href="#" class="mail-nav-link active">
                <i class="bi bi-inbox fs-5"></i> Inbox <span class="ms-auto badge bg-primary rounded-pill">3</span>
            </a>
            <a href="#" class="mail-nav-link">
                <i class="bi bi-star fs-5"></i> Starred
            </a>
            <a href="#" class="mail-nav-link">
                <i class="bi bi-send fs-5"></i> Sent
            </a>
            <a href="#" class="mail-nav-link">
                <i class="bi bi-file-earmark fs-5"></i> Drafts <span class="ms-auto badge bg-light text-dark rounded-pill border">2</span>
            </a>
            <a href="#" class="mail-nav-link text-danger">
                <i class="bi bi-trash fs-5"></i> Trash
            </a>
        </nav>

        <div class="mail-nav-title">Labels</div>
        <nav>
            <a href="#" class="mail-nav-link"><span style="width: 10px; height: 10px; border-radius: 50%; background: #3b82f6; display: inline-block;"></span> Personal</a>
            <a href="#" class="mail-nav-link"><span style="width: 10px; height: 10px; border-radius: 50%; background: #10b981; display: inline-block;"></span> Work</a>
            <a href="#" class="mail-nav-link"><span style="width: 10px; height: 10px; border-radius: 50%; background: #f59e0b; display: inline-block;"></span> Important</a>
        </nav>
    </div>
    <div class="mail-list-container">
        <!-- Toolbar -->
        <div class="p-3 border-bottom d-flex align-items-center justify-content-between bg-white z-1">
            <div class="d-flex align-items-center">
                <div class="form-check ms-2 me-3 mb-0">
                    <input type="checkbox" class="form-check-input shadow-sm cursor-pointer" id="selectAll">
                </div>
                <div class="btn-group shadow-sm">
                    <button class="btn btn-sm btn-light border"><i class="bi bi-arrow-clockwise text-muted"></i></button>
                    <button class="btn btn-sm btn-light border"><i class="bi bi-archive text-muted"></i></button>
                    <button class="btn btn-sm btn-light border"><i class="bi bi-exclamation-octagon text-muted"></i></button>
                    <button class="btn btn-sm btn-light border"><i class="bi bi-trash text-muted"></i></button>
                    <button class="btn btn-sm btn-light border"><i class="bi bi-three-dots-vertical text-muted"></i></button>
                </div>
            </div>
            <div class="d-flex align-items-center gap-3">
                <span class="small text-muted fw-medium">1-50 of 1,245</span>
                <div class="btn-group shadow-sm">
                    <button class="btn btn-sm btn-light border"><i class="bi bi-chevron-left"></i></button>
                    <button class="btn btn-sm btn-light border"><i class="bi bi-chevron-right"></i></button>
                </div>
            </div>
        </div>
        
        <!-- Mail List -->
        <div class="mail-list">
            @php
                $emails = [
                    ['sender' => 'Dribbble', 'subject' => 'Your daily dose of inspiration is here - Check out the latest designs from top creators globally.', 'time' => '10:24 AM', 'unread' => true, 'label' => 'Design', 'labelColor' => 'primary'],
                    ['sender' => 'Github', 'subject' => '[Security] Vulnerability found in one of your repos - Please update your dependencies immediately.', 'time' => '09:15 AM', 'unread' => true, 'label' => 'Alert', 'labelColor' => 'danger'],
                    ['sender' => 'Slack', 'subject' => 'New login to your workspace from a new device (MacBook Pro) in London.', 'time' => 'Yesterday', 'unread' => false, 'label' => null],
                    ['sender' => 'Zoom', 'subject' => 'Your meeting "Project Sync" is starting in 15 mins. Click here to join.', 'time' => 'Yesterday', 'unread' => false, 'label' => 'Work', 'labelColor' => 'success'],
                    ['sender' => 'Medium', 'subject' => 'Top stories for you: How to build agentic assistants Using modern LLMs.', 'time' => 'Mar 05', 'unread' => false, 'label' => null],
                    ['sender' => 'Apple', 'subject' => 'Your receipt from Apple. Thank you for your purchase of iCloud+ 200GB.', 'time' => 'Mar 04', 'unread' => false, 'label' => null],
                    ['sender' => 'Figma', 'subject' => 'Felix mentioned you in a comment on "Dashboard UI v2" file.', 'time' => 'Mar 03', 'unread' => false, 'label' => 'Design', 'labelColor' => 'primary'],
                    ['sender' => 'Stripe', 'subject' => 'Payment successfully processed for invoice #INV-2048 - Ash Theme LLC.', 'time' => 'Mar 02', 'unread' => false, 'label' => 'Finance', 'labelColor' => 'warning'],
                ];
            @endphp

            @foreach($emails as $index => $email)
            <div class="mail-item {{ $email['unread'] ? 'unread' : '' }}" onclick="openMail('{{ $email['sender'] }}', '{{ addslashes($email['subject']) }}', '{{ $email['time'] }}', event)">
                <input type="checkbox" class="form-check-input mail-checkbox ms-1" onclick="event.stopPropagation(); toggleRowSelection(this)">
                <i class="bi {{ $index == 1 || $index == 6 ? 'bi-star-fill active' : 'bi-star' }} mail-star" onclick="event.stopPropagation(); this.classList.toggle('bi-star'); this.classList.toggle('bi-star-fill'); this.classList.toggle('active');"></i>
                <span class="mail-sender text-truncate">{{ $email['sender'] }}</span>
                <span class="mail-subject">
                    @if($email['label'])
                        <span class="badge bg-{{ $email['labelColor'] }}-subtle text-{{ $email['labelColor'] }} border border-{{ $email['labelColor'] }}-subtle">{{ $email['label'] }}</span>
                    @endif
                    {{ $email['subject'] }}
                </span>
                <span class="mail-time">{{ $email['time'] }}</span>
            </div>
            @endforeach
        </div>

        <!-- Mail Reader UI -->
        <div class="mail-reader" id="mailReader">
            <div class="reader-header">
                <div class="d-flex align-items-center gap-3">
                    <button class="btn btn-light rounded-circle" onclick="closeMail()" style="width: 40px; height: 40px; padding: 0;"><i class="bi bi-arrow-left fs-5"></i></button>
                    <div class="btn-group shadow-sm">
                        <button class="btn btn-sm btn-light border"><i class="bi bi-archive text-muted"></i></button>
                        <button class="btn btn-sm btn-light border"><i class="bi bi-exclamation-octagon text-muted"></i></button>
                        <button class="btn btn-sm btn-light border"><i class="bi bi-trash text-muted"></i></button>
                    </div>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <span class="text-muted small">1 of 1,245</span>
                    <button class="btn btn-sm btn-light border rounded"><i class="bi bi-chevron-left"></i></button>
                    <button class="btn btn-sm btn-light border rounded"><i class="bi bi-chevron-right"></i></button>
                </div>
            </div>
            <div class="reader-body">
                <div class="d-flex justify-content-between align-items-start mb-4">
                    <h3 class="fw-bold mb-0" id="readerSubject">Mail Subject</h3>
                    <div class="d-flex gap-2">
                        <button class="btn btn-sm btn-light border"><i class="bi bi-printer text-muted"></i></button>
                        <button class="btn btn-sm btn-light border"><i class="bi bi-box-arrow-up-right text-muted"></i></button>
                    </div>
                </div>
                
                <div class="d-flex justify-content-between align-items-center mb-5 pb-3 border-bottom">
                    <div class="d-flex align-items-center gap-3">
                        <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center fw-bold fs-5 shadow-sm" style="width: 48px; height: 48px;" id="readerInitial">A</div>
                        <div>
                            <div class="fw-bold fs-6 d-flex align-items-center gap-2">
                                <span id="readerSender">Sender Name</span> 
                                <span class="text-muted fw-normal small">&lt;sender@example.com&gt;</span>
                            </div>
                            <div class="text-muted small">to me <i class="bi bi-caret-down-fill" style="font-size: 0.6rem;"></i></div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-3">
                        <span class="text-muted small" id="readerTime">10:24 AM</span>
                        <i class="bi bi-star mail-star m-0" onclick="this.classList.toggle('bi-star'); this.classList.toggle('bi-star-fill'); this.classList.toggle('active');"></i>
                        <button class="btn btn-light rounded-circle" style="width: 36px; height: 36px; padding: 0;"><i class="bi bi-reply fs-6"></i></button>
                        <button class="btn btn-light rounded-circle" style="width: 36px; height: 36px; padding: 0;"><i class="bi bi-three-dots-vertical fs-6"></i></button>
                    </div>
                </div>

                <div class="content" style="font-size: 0.95rem; line-height: 1.6; color: #334155;">
                    <p>Hi Jerry,</p>
                    <p>This is a simulated email body for the selected email. It demonstrates exactly how reading an email looks within the Ash dashboard.</p>
                    <p>It's designed to mimic Gmail's clean aesthetic while keeping the Ash look & feel.</p>
                    <br>
                    <p>Best regards,<br><strong id="readerSignoff">Sender</strong></p>
                </div>
                
                <div class="mt-5 pt-4 border-top">
                    <div class="border rounded-3 p-3 bg-light text-muted cursor-pointer" style="border-style: dashed !important; transition: all 0.2s;" onmouseover="this.style.backgroundColor='#f1f5f9'; this.style.borderColor='#cbd5e1'" onmouseout="this.style.backgroundColor='#f8fafc'; this.style.borderColor='#e2e8f0'">
                        <div class="d-flex gap-3 align-items-center">
                            <div class="bg-white rounded-circle d-flex align-items-center justify-content-center shadow-sm" style="width: 36px; height: 36px;">
                                <i class="bi bi-reply-fill text-primary"></i>
                            </div>
                            <span>Click here to <span class="text-primary fw-medium">Reply</span> or <span class="text-primary fw-medium">Forward</span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Compose Modal -->
<div class="modal fade" id="composeModal" tabindex="-1" aria-labelledby="composeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg">
            <div class="modal-header bg-dark text-white border-bottom-0 p-4">
                <h5 class="modal-title fw-bold" id="composeModalLabel">New Message</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <form>
                    <div class="mb-3">
                        <input type="text" class="form-control border-0 border-bottom rounded-0 px-0" placeholder="To:">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control border-0 border-bottom rounded-0 px-0" placeholder="Subject:">
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control border-0 rounded-0 px-0" rows="8" placeholder="Type your message here..."></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer border-top-0 p-4 d-flex justify-content-between">
                <div>
                    <button class="btn btn-light border me-1"><i class="bi bi-paperclip"></i></button>
                    <button class="btn btn-light border me-1"><i class="bi bi-image"></i></button>
                    <button class="btn btn-light border"><i class="bi bi-link-45deg"></i></button>
                </div>
                <div>
                    <button type="button" class="btn btn-light px-4" data-bs-dismiss="modal">Discard</button>
                    <button type="button" class="btn btn-primary px-4 shadow-sm">Send <i class="bi bi-send ms-2"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('js/app-mail.js') }}"></script>
@endsection
