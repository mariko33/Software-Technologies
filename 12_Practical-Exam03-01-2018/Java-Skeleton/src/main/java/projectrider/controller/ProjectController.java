package projectrider.controller;

import projectrider.entity.Project;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import projectrider.bindingModel.ProjectBindingModel;
import projectrider.repository.ProjectRepository;

import java.util.List;

@Controller
public class ProjectController {
	private final ProjectRepository projectRepository;

	@Autowired
	public ProjectController(ProjectRepository projectRepository) {
		this.projectRepository = projectRepository;
	}

	@GetMapping("/")
	public String index(Model model) {
		List<Project>projects=this.projectRepository.findAll();
		model.addAttribute("projects",projects);
		model.addAttribute("view","project/index");
		return "base-layout";

	}

	@GetMapping("/create")
	public String create(Model model) {
		model.addAttribute("view","project/create");
		return "base-layout";
	}

	@PostMapping("/create")
	public String createProcess(Model model, ProjectBindingModel projectBindingModel) {
		if (projectBindingModel.getDescription().equals("") ||
				projectBindingModel.getTitle().equals("")||projectBindingModel.getBudget()==0) {
			model.addAttribute("project", projectBindingModel);
			model.addAttribute("view", "project/create");
			return "base-layout";
		}

		Project project = new Project(projectBindingModel.getTitle(),projectBindingModel.getDescription(),projectBindingModel.getBudget());

		this.projectRepository.saveAndFlush(project);
		return "redirect:/";
	}

	@GetMapping("/edit/{id}")
	public String edit(Model model, @PathVariable int id) {
		Project project=this.projectRepository.findOne(id);
		if(project!=null){
			model.addAttribute("project",project);
			model.addAttribute("view","project/edit");
			return "base-layout";
		}
		return "redirect:/";
	}

	@PostMapping("/edit/{id}")
	public String editProcess(@PathVariable int id, Model model, ProjectBindingModel projectBindingModel) {
		if (projectBindingModel.getDescription().equals("") ||
				projectBindingModel.getTitle().equals("")||projectBindingModel.getBudget()==0) {
			Project project=new Project();
			project.setId(id);
			project.setBudget(projectBindingModel.getBudget());
			project.setDescription(projectBindingModel.getDescription());
			project.setTitle(projectBindingModel.getTitle());
			model.addAttribute("project", project);
			model.addAttribute("view", "project/edit");
			return "base-layout";
		}
		Project project=this.projectRepository.findOne(id);
		if(project!=null){
			project.setTitle(projectBindingModel.getTitle());
			project.setDescription(projectBindingModel.getDescription());
			project.setBudget(projectBindingModel.getBudget());
			this.projectRepository.saveAndFlush(project);
		}
		return "redirect:/";
	}

	@GetMapping("/delete/{id}")
	public String delete(Model model, @PathVariable int id) {
		Project project=this.projectRepository.findOne(id);
		if(project!=null){
			model.addAttribute("project",project);
			model.addAttribute("view","project/delete");
			return "base-layout";
		}
		return "redirect:/";

	}

	@PostMapping("/delete/{id}")
	public String deleteProcess(@PathVariable int id, ProjectBindingModel projectBindingModel) {
		try {
			this.projectRepository.delete(id);
		} catch (Exception ex) {

		}
		return "redirect:/";
	}
}
