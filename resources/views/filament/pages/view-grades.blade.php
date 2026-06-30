<x-filament::page>
    <div class="mb-6">
        <h2 class="text-xl font-bold">
            Rapor Siswa
        </h2>

        <div class="mt-2">
            <p><b>Nama:</b> {{ $student->nama_siswa }}</p>
            <p><b>NISN:</b> {{ $student->nisn }}</p>
        </div>
    </div>

    @foreach($grades as $mapel => $items)
        <div class="mb-4 p-4 border rounded-xl">
            <h3 class="text-primary font-bold mb-2">
                {{ $mapel }}
            </h3>

            <div class="grid grid-cols-3 gap-2 text-sm">
                <div>UH</div>
                <div>UTS</div>
                <div>UAS</div>

                <div>{{ $items->where('grade_type','UH')->first()->score ?? '-' }}</div>
                <div>{{ $items->where('grade_type','UTS')->first()->score ?? '-' }}</div>
                <div>{{ $items->where('grade_type','UAS')->first()->score ?? '-' }}</div>
            </div>
        </div>
    @endforeach
</x-filament::page>