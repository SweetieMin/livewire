<div>
    {{-- Create and Update Subject Modal --}}
    <flux:modal :dismissible="false" name="modal-subject" class="md:w-900">
        <form wire:submit='{{ $isEditSubjectMode ? 'updateSubject' : 'createSubject' }}' class="space-y-6">
            <div>
                <flux:heading class="font-bold" size="lg">
                    {{ $isEditSubjectMode ? 'Cập nhật môn học' : 'Tạo mới môn học' }}
                </flux:heading>
                <flux:text class="mt-2">
                    {{ $isEditSubjectMode ? 'Chỉnh sửa thông tin môn học' : 'Thêm mới môn học' }}.
                </flux:text>
            </div>

            <flux:separator />

            <div class="flex gap-2">
                <div class="form-group w-3/5">
                    <flux:label>Tên môn học</flux:label>
                    <flux:input.group>
                        <flux:input.group.prefix>ICY</flux:input.group.prefix>
                        <flux:input wire:model='name' placeholder="Nhập Tên môn học (ICY)" autofocus/>
                    </flux:input.group>
                </div>

                <div class="form-group w-2/5">
                    <flux:input wire:model='code' label="Mã môn học" />
                </div>
            </div>

            <div class="form-group">
                <flux:select wire:model="program_id" placeholder="Chọn chương trình học" label="Chương trình học">
                    <flux:select.option value="">Chọn chương trình học</flux:select.option>
                    @forelse ($programs as $program)
                        <flux:select.option :value="$program->id">{{ $program->name }}</flux:select.option>
                    @empty
                        <flux:select.option value="">Không có chương trình học</flux:select.option>
                    @endforelse
                </flux:select>
            </div>

            <div class="form-group">
                <flux:textarea wire:model='description' label="Mô tả môn học" />
            </div>

            <div class="flex">
                <flux:spacer />
                <flux:button type="submit" class="cursor-pointer" variant="primary">
                    {{ $isEditSubjectMode ? 'Cập nhật' : 'Thêm mới' }}
                </flux:button>
            </div>
        </form>
    </flux:modal>
    {{-- Delete Subject Modal --}}
    <flux:modal name="modal-delete-subject" class="md:w-[500px]">
        <div
            class="bg-gradient-to-br from-red-50 via-white to-pink-50 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900 rounded-2xl">
            <!-- Header với gradient background -->
            <div class="relative px-8 py-6 bg-gradient-to-r from-red-500 via-pink-500 to-red-600 rounded-t-2xl">
                <div class="absolute inset-0 bg-black/10 rounded-t-2xl"></div>
                <div class="relative flex items-center">
                    <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center mr-4">
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z" clip-rule="evenodd">
                            </path>
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div>
                        <flux:heading class="font-bold text-white text-xl">
                            🗑️ Xác nhận xóa môn học
                        </flux:heading>
                        <flux:text class="mt-1 text-red-100">
                            Hành động này không thể hoàn tác
                        </flux:text>
                    </div>
                </div>
            </div>

            <form wire:submit='deleteSubjectConfirm' class="px-8 py-6 space-y-6">
                <div class="bg-red-50 dark:bg-red-900/20 border border-red-200 dark:border-red-800 rounded-xl p-6">
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <svg class="w-8 h-8 text-red-600 dark:text-red-400" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-medium text-red-800 dark:text-red-200">
                                Cảnh báo xóa dữ liệu
                            </h3>
                            <div class="mt-2 text-red-700 dark:text-red-300">
                                <p class="mb-2">Bạn có chắc chắn muốn xóa môn học này không?</p>
                                <ul class="list-disc list-inside space-y-1 text-sm">
                                    <li>Tất cả thông tin môn học sẽ bị xóa vĩnh viễn</li>
                                    <li>Các khóa học và giáo trình liên quan sẽ bị ảnh hưởng</li>
                                    <li>Dữ liệu học tập của học viên có thể bị mất</li>
                                    <li>Thứ tự sắp xếp môn học sẽ bị thay đổi</li>
                                    <li>Hành động này không thể hoàn tác</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-end space-x-3">
                    <flux:modal.close>
                        <flux:button variant="ghost"
                            class="px-6 py-2 rounded-xl border border-gray-300 hover:bg-gray-50 transition-all duration-300">
                            ↩️ Hủy bỏ
                        </flux:button>
                    </flux:modal.close>

                    <flux:button type="submit" variant="danger"
                        class="cursor-pointer px-8 py-2 bg-gradient-to-r from-red-600 to-pink-600 hover:from-red-700 hover:to-pink-700 text-white rounded-xl shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                        🗑️ Xóa vĩnh viễn
                    </flux:button>
                </div>
            </form>
        </div>
    </flux:modal>
</div>
