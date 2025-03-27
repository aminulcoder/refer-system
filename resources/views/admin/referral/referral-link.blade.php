@extends('admin.layouts.app')

@section('breadcrumb')
    <x-breadcrumb pageone="Referral Link" class="py-2" pageoneRoute="{{ route('slider.index') }}" pagetwo="Create" />
@endsection

@section('content')
    <div class="flex flex-col gap-6">
        <div class="card">
            <div class="card-header">
                <div class="p-6">
                    <h2 class="text-lg font-semibold mb-4">Your Referral Link</h2>

                    @if(session('error'))
                        <p class="text-red-500">{{ session('error') }}</p>
                    @endif

                    <div class="grid grid-cols-12 gap-5">
                        <div class="col-span-12 lg:col-span-12 bg-white dark:bg-gray-800 p-4 rounded-lg">
                            @php
                                $user = Auth::user();
                                $referralLink = $user->referral_link ?? '#';
                            @endphp

                            <div class="mb-4">
                                <label class="block text-gray-500 dark:text-gray-200 text-sm font-medium mb-2">Referral Link</label>
                                <div class="flex items-center space-x-2">
                                    <input type="text" id="referralLink" value="{{ $referralLink }}" readonly class="w-full border rounded-lg px-4 py-2 dark:bg-gray-700 dark:text-white">
                                    <button onclick="copyToClipboard()" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg">Copy</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script>
        function copyToClipboard() {
            let referralInput = document.getElementById("referralLink");
            referralInput.select();
            referralInput.setSelectionRange(0, 99999);
            navigator.clipboard.writeText(referralInput.value).then(() => {
                alert("Referral link copied!");
            }).catch(err => {
                alert("Failed to copy: " + err);
            });
        }
    </script>
@endpush
