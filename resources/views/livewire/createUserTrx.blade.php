<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
    
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>

        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>

            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">    
                <form>
                    
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">


                                                
                        <div class="mb-4">
                            <label for="room_name" class="block text-gray-700 text-sm font-bold mb-2">Select Room</label>
                            {{-- <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="room_id" wire:model="room_id"> --}}
                            <select required name="room_name"  id="room_name" wire:model="room_name">
                                <option disabled value="">Room types:</option>
                                <option value="Single">Single</option>
                                <option value="Double">Double</option>  
                                <option value="Luxury">Luxury</option>  
                                <option value="Executive">Executive</option>  
                                <option value="Budget">Budget</option>  
                                <option value="Danube view">Danube view</option>    
                            </select>
                        </div>

                        @if(session()->has('unavailable_message'))
                        <div class="bg-red-100 rounded-b text-red-900 px-4 py-4 shadow-md my-3" role="alert">
                        <div class="flex">
                            <div>
                            <h4>{{ session('unavailable_message')}}</h4>
                            </div>
                        </div>
                        </div>
                        @endif

                        <div class="mb-4">
                            <label for="checkin" class="block text-gray-700 text-sm font-bold mb-2">Checkin:</label>
                            <input required type="date" value="2022-03-22"
                            min="2022-03-22" max="2099-12-31" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="checkin" wire:model="checkin">
                        </div>

                        @if(session()->has('checkin_message'))
                        <div class="bg-red-100 rounded-b text-red-900 px-4 py-4 shadow-md my-3" role="alert">
                        <div class="flex">
                            <div>
                            <h4>{{ session('checkin_message')}}</h4>
                            </div>
                        </div>
                        </div>
                        @endif

                        <div class="mb-4">
                            <label for="checkout" class="block text-gray-700 text-sm font-bold mb-2">Checkout:</label>
                            <input required type="date" value="2022-03-22"
                            min="2022-03-22" max="2099-12-31" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="checkout" wire:model="checkout">
                        </div>

                        @if(session()->has('days_message'))
                        <div class="bg-red-100 rounded-b text-red-900 px-4 py-4 shadow-md my-3" role="alert">
                        <div class="flex">
                            <div>
                            <h4>{{ session('days_message')}}</h4>
                            </div>
                        </div>
                        </div>
                        @endif
                        
                        <div class="mb-4">
                            <label for="days" class="block text-gray-700 text-sm font-bold mb-2">Days:</label>
                            <input readonly type="number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="days" wire:model="days">
                        </div>
                        <div class="mb-4">
                            <label for="bill" class="block text-gray-700 text-sm font-bold mb-2">Bill:</label>
                            <input readonly type="number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="bill" wire:model="bill">
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2">Halfboard:</label>
                            {{-- <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="halfboard" wire:model="halfboard"> --}}
                            <select required for="halfboard" name="halfboard"  id="halfboard" wire:model="halfboard">
                                <option disabled value="">Options:</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>    
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="number_of_guests" class="block text-gray-700 text-sm font-bold mb-2">Number of guests:</label>
                            <input required type="number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="number_of_guests" wire:model="number_of_guests">
                        </div>

                        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex  sm:flex-col space-y-4">
                            <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                                <button wire:click="closeModal()" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-gray-200 text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-700 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">Cancel</button>
                            </span>
                            
                            <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                                <button wire:click.prevent="save()" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-purple-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-purple-800 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5" {{ $isDisabled ? 'disabled' : '' }}>Save</button>
                            </span>

                            
                        </div>

                    </div>
                </form>    
            </div>


    </div>
</div>
