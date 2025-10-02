<div>
    <h3>Send Mail</h3>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form wire:submit.prevent="sendMail" enctype="multipart/form-data">
        <h5>SMTP Config</h5>
        <div class="mb-2">
            <label>SMTP Host</label>
            <input type="text" class="form-control" wire:model="smtp_host">
            @error('smtp_host') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-2">
            <label>SMTP Port</label>
            <input type="number" class="form-control" wire:model="smtp_port">
            @error('smtp_port') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-2">
            <label>SMTP User (Email)</label>
            <input type="email" class="form-control" wire:model="smtp_user">
            @error('smtp_user') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-2">
            <label>SMTP Password</label>
            <input type="password" class="form-control" wire:model="smtp_pass">
            @error('smtp_pass') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-2">
            <label>Encryption</label>
            <select class="form-control" wire:model="smtp_encryption">
                <option value="tls">TLS</option>
                <option value="ssl">SSL</option>
                <option value="null">None</option>
            </select>
            @error('smtp_encryption') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-2">
            <label>From Email</label>
            <input type="email" class="form-control" wire:model="from_email">
            @error('from_email') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-2">
            <label>From Name</label>
            <input type="text" class="form-control" wire:model="from_name">
            @error('from_name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <hr>

        <h5>Mail Content</h5>
        <div class="mb-2">
            <label>To</label>
            <input type="email" class="form-control" wire:model="to">
            @error('to') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-2">
            <label>Subject</label>
            <input type="text" class="form-control" wire:model="subject">
            @error('subject') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-2">
            <label>Message</label>
            <textarea class="form-control" wire:model="message" rows="15"></textarea>
            @error('message') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-2">
            <label>Attachment</label>
            <input type="file" class="form-control" wire:model="attachment">
            @error('attachment') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="btn btn-primary">Send Mail</button>
    </form>
</div>
