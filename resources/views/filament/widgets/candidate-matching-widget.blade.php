<!-- <x-filament::card>
    <x-filament::section heading="Candidate Matches">
        <x-filament::select wire:model="selectedJobRole">
            <option value="">All Roles</option>
            @foreach(\App\Models\JobRole::all() as $role)
                <option value="{{ $role->id }}">{{ $role->role_name }}</option>
            @endforeach
        </x-filament::select>

        <table class="min-w-full bg-white">
            <thead>
                <tr>
                    <th class="px-4 py-2">Candidate</th>
                    <th class="px-4 py-2">Matching Role</th>
                    <th class="px-4 py-2">Match %</th>
                </tr>
            </thead>
            <tbody>
                @foreach($this->getCandidates() as $candidate)
                    <tr>
                        <td class="border px-4 py-2">{{ $candidate->candidate_name }}</td>
                        <td class="border px-4 py-2">{{ $candidate->matching_job_role }}</td>
                        <td class="border px-4 py-2">{{ $candidate->match_percentage }}%</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </x-filament::section>
</x-filament::card> -->
