<?php

class Admin extends Controller
{
    public function __construct()
    {
        $user = getLoginAccount();
        if ($user == null) {
            // mencegah guest
            return redirect('login');
        }

        if (! isset($user['id_level'])) {
            // melarang penumpang masuk
            return redirect('home');
        }
    }

    public function index()
    {
        $this->view('header');
        $this->view('content');
        $this->view('footer');
    }

    /**
     * menampilkan daftar petugas
     */
    public function petugas()
    {
        $db = new Database();
        $all_petugas = $db->query('SELECT * FROM petugas_level_view')->get();
        $data = ['all_petugas' => $all_petugas];

        $this->view('header');
        $this->view('admin/petugas/index', $data);
        $this->view('footer');
    }

    /**
     * menampilkan formulir pembuatan petugas
     */
    public function petugas_create()
    {
        $this->view('header');
        $this->view('admin/petugas/create');
        $this->view('footer');
    }

    /**
     * menampilkan formulir edit petugas
     */
    public function petugas_edit($id_petugas)
    {
        $db = new Database();
        $petugas = $db->query('SELECT * FROM petugas WHERE id_petugas = :id_petugas')
            ->bind(':id_petugas', $id_petugas)
            ->first();

        $data = ['petugas' => $petugas];

        $this->view('header');
        $this->view('admin/petugas/edit', $data);
        $this->view('footer');
    }

    /**
     * menyetor data petugas yang dikirim dari formulir petugas_create
     */
    public function petugas_store()
    {
        $db = new Database();
        $db->query('INSERT INTO petugas (username, password, nama_petugas, id_level) VALUES (:username, :password, :nama_petugas, :id_level)')
            ->bind(':username', $_POST['username'])
            ->bind(':password', $_POST['password'])
            ->bind(':nama_petugas', $_POST['nama_petugas'])
            ->bind(':id_level', 2)
            ->execute();
        
        return redirect('admin/petugas');
    }

    /**
     * mengupdate data petugas yang dikirim dari formulir petugas_edit
     */
    public function petugas_update($id_petugas)
    {
        $db = new Database();
        $db->query('UPDATE petugas SET username = :username, password = :password, nama_petugas = :nama_petugas WHERE id_petugas = :id_petugas')
            ->bind(':username', $_POST['username'])
            ->bind(':password', $_POST['password'])
            ->bind(':nama_petugas', $_POST['nama_petugas'])
            ->bind(':id_petugas', $id_petugas)
            ->execute();
        
        return redirect('admin/petugas');
    }

    public function petugas_destroy($id_petugas)
    {
        $db = new Database();

        $db->query('DELETE FROM petugas WHERE id_petugas = :id_petugas')
            ->bind(':id_petugas', $id_petugas)
            ->execute();

        return redirect('admin/petugas');
    }

    public function level()
    {
        $db = new Database();

        $all_level = $db->query('SELECT * FROM level')->get();
        $data = ['all_level' => $all_level];

        $this->view('header');
        $this->view('admin/level/index', $data);
        $this->view('footer');
    }

    public function type_transportasi()
    {
        $db = new Database();

        $all_type_transportasi = $db->query('SELECT * FROM type_transportasi')->get();
        $data = ['all_type_transportasi' => $all_type_transportasi];
        
        $this->view('header');
        $this->view('admin/type_transportasi/index', $data);
        $this->view('footer');
    }

    public function type_transportasi_create()
    {
        $this->view('header');
        $this->view('admin/type_transportasi/create');
        $this->view('footer');
    }

    public function type_transportasi_edit($id_type_transportasi)
    {
        $db = new Database();
        $type_transportasi = $db->query('SELECT * FROM type_transportasi WHERE id_type_transportasi = :id_type_transportasi')
            ->bind(':id_type_transportasi', $id_type_transportasi)
            ->first();
        $data = ['type_transportasi' => $type_transportasi];

        $this->view('header');
        $this->view('admin/type_transportasi/edit', $data);
        $this->view('footer');
    }

    public function type_transportasi_store()
    {
        $db = new Database();
        $db->query('INSERT INTO type_transportasi (nama_type, keterangan) VALUES (:nama_type, :keterangan)')
            ->bind(':nama_type', $_POST['nama_type'])
            ->bind(':keterangan', $_POST['keterangan'])
            ->execute();

        return redirect('admin/type_transportasi');
    }

    public function type_transportasi_update($id_type_transportasi)
    {
        $db = new Database();
        $db->query('UPDATE type_transportasi SET nama_type = :nama_type, keterangan = :keterangan WHERE id_type_transportasi = :id_type_transportasi')
            ->bind(':nama_type', $_POST['nama_type'])
            ->bind(':keterangan', $_POST['keterangan'])
            ->bind(':id_type_transportasi', $id_type_transportasi)
            ->execute();
        
        return redirect('admin/type_transportasi');
    }

    public function type_transportasi_destroy($id_type_transportasi)
    {
        $db = new Database();
        $db->query('DELETE FROM type_transportasi WHERE id_type_transportasi = :id_type_transportasi')
            ->bind(':id_type_transportasi', $id_type_transportasi)
            ->execute();

        return redirect('admin/type_transportasi');
    }

    public function penumpang()
    {
        $db = new Database();
        $all_penumpang = $db->query('SELECT * FROM penumpang')->get();
        $data = ['all_penumpang' => $all_penumpang];

        $this->view('header');
        $this->view('admin/penumpang/index', $data);
        $this->view('footer');
    }

    public function penumpang_edit($id_penumpang)
    {
        $db = new Database();
        $penumpang = $db->query('SELECT * FROM penumpang WHERE id_penumpang = :id_penumpang')
            ->bind(':id_penumpang', $id_penumpang)
            ->first();
        
        $data = ['penumpang' => $penumpang];

        $this->view('header');
        $this->view('admin/penumpang/edit',$data);
        $this->view('footer');
    }

    public function penumpang_update($id_penumpang)
    {
        $db = new Database();
        $db->query('UPDATE penumpang SET 
            username = :username, 
            password = :password, 
            nama_penumpang = :nama_penumpang,
            alamat_penumpang = :alamat_penumpang,
            tanggal_lahir = :tanggal_lahir,
            telefone = :telefone
            WHERE id_penumpang = :id_penumpang
        ')->bind(':username', $_POST['username'])
        ->bind(':password', $_POST['password'])
        ->bind(':nama_penumpang', $_POST['nama_penumpang'])
        ->bind(':alamat_penumpang', $_POST['alamat_penumpang'])
        ->bind(':tanggal_lahir', $_POST['tanggal_lahir'])
        ->bind(':telefone', $_POST['telefone'])
        ->bind(':id_penumpang', $id_penumpang)
        ->execute();
        
        return redirect('admin/penumpang');
    }

    public function penumpang_destroy($id_penumpang)
    {
        $db = new Database();
        $db->query('DELETE FROM penumpang WHERE id_penumpang = :id_penumpang')
            ->bind(':id_penumpang', $id_penumpang)
            ->execute();

        return redirect('admin/penumpang');
    }

    public function rute()
    {
        $db = new Database();
        $all_rute = $db->query('SELECT * FROM rute_transportasi_view')->get();

        $data = ['all_rute' => $all_rute];

        $this->view('header');
        $this->view('admin/rute/index', $data);
        $this->view('footer');
    }

    public function rute_create()
    {
        $db = new Database();
        $all_transportasi = $db->query('SELECT * FROM transportasi')->get();

        $data = ['all_transportasi' => $all_transportasi];

        $this->view('header');
        $this->view('admin/rute/create',$data);
        $this->view('footer');
    }

    public function rute_edit()
    {
        $db = new Database();
    }

}