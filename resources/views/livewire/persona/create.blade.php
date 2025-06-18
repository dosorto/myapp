<div class="p-6 bg-white rounded shadow-md space-y-4">
    <form wire:submit.prevent="store" class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <input type="text" wire:model="primer_nombre" placeholder="Primer Nombre" class="input-style">
        <input type="text" wire:model="segundo_nombre" placeholder="Segundo Nombre" class="input-style">
        <input type="text" wire:model="primer_apellido" placeholder="Primer Apellido" class="input-style">
        <input type="text" wire:model="segundo_apellido" placeholder="Segundo Apellido" class="input-style">
        <input type="text" wire:model="dni" placeholder="DNI" class="input-style">
        <input type="text" wire:model="telefono" placeholder="Teléfono" class="input-style">
        
        <div class="col-span-2">
            <textarea wire:model="direccion" placeholder="Dirección" class="input-style w-full h-24"></textarea>
        </div>
        
        <select wire:model="sexo" class="input-style">
            <option value="">-- Sexo --</option>
            <option value="M">Masculino</option>
            <option value="F">Femenino</option>
        </select>
        <input type="date" wire:model="fecha_nacimiento" class="input-style">

        <div class="col-span-2 flex justify-end">
            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">Guardar</button>
        </div>
    </form>
</div>
