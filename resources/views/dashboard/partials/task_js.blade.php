<script>
document.addEventListener("DOMContentLoaded", function() {
    // Görev ekleme işlemi
    document.getElementById('addTask').addEventListener('click', function() {
        var task = document.getElementById('task-add').value;

        fetch('{{ route('dashboard.add-task') }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({ description: task })
        })
        .then(response => {
            if (response.ok) {
                console.log('Görev başarıyla eklendi.');
            } else {
                console.error('Görev eklenirken bir hata oluştu.');
            }
        })
        .catch(error => {
            console.error('Bir hata oluştu:', error);
        });
    });

    // Görev silme işlemi
    document.querySelectorAll('.remove').forEach(function(button) {
        button.addEventListener('click', function() {
            var taskId = button.id.split('_')[1];
            if (confirm("Bu görevi silmek istediğinize emin misiniz?")) {
                fetch('{{ route('dashboard.delete-task') }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({ task_id: taskId })
                })
                .then(response => {
                    if (response.ok) {
                        console.log('Görev başarıyla silindi.');
                    } else {
                        console.error('Görev silinirken bir hata oluştu.');
                    }
                })
                .catch(error => {
                    console.error('Bir hata oluştu:', error);
                });
            }
        });
    });

    // Görev durumunu kontrol etme işlemi
    document.querySelectorAll('.todo-task input[type="checkbox"]').forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
            var taskId = checkbox.id.split('_')[1];
            fetch('{{ route('dashboard.check-task') }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ task_id: taskId })
            })
            .then(response => {
                if (response.ok) {
                    console.log('Görev durumu başarıyla güncellendi.');
                } else {
                    console.error('Görev durumu güncellenirken bir hata oluştu.');
                }
            })
            .catch(error => {
                console.error('Bir hata oluştu:', error);
            });
        });
    });
});





</script>