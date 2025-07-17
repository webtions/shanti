# Contributing Guide – Shanti Theme

This guide outlines the branching strategy and workflow used for development. It’s primarily for personal reference but may help others understand how the project is structured.

---

## 🌿 Branch Structure

- **`main`**
  Stable, production-ready code. Only updated after testing is complete.

- **`dev`**
  Primary working branch. All development happens here before merging into `main`.

- **`feature/<name>`**
  For new features or major changes.
  Example: `feature/grid-overlay-support`

- **`refactor/<name>`**
  For internal improvements, code reorganisation, or cleanup.
  Example: `refactor/pattern-registration`

- **`fix/<name>`**
  For bug fixes or small improvements.
  Example: `fix/footer-alignment`

---

## 🔁 Workflow

1. **Start from `dev`**
   Create a new branch based on `dev`:

   ```bash
   git checkout dev
   git pull
   git checkout -b feature/your-branch-name
   ```

2. **Commit changes with clear messages**

   - Use present tense: `Add`, `Fix`, `Update`, etc.
   - Be concise but descriptive.

3. **Merge back into `dev`**
   When done:

   ```bash
   git checkout dev
   git pull
   git merge feature/your-branch-name
   git branch -d feature/your-branch-name
   ```

4. **Test `dev` thoroughly**

5. **Merge `dev` into `main` when ready**
   - Only after everything is tested on staging or live site.
   - Then push and tag a release.

---

## 🏷️ Tagging Releases

After merging into `main`, tag with semantic versioning:

```bash
git checkout main
git pull
git tag -a v1.0.0 -m "Initial stable release of Shanti theme"
git push origin v1.0.0
```

Use versions like:

- `v0.1.0`: First draft
- `v0.2.0`: Major refactor or new feature set
- `v1.0.0`: First public release (WordPress.org)

---

## 🧪 Fixes and Hotfixes

If a quick fix is needed on `main` after release:

- Create a fix branch from `main`:

  ```bash
  git checkout main
  git pull
  git checkout -b fix/critical-bug
  ```

- After fixing and testing:
  ```bash
  git checkout main
  git merge fix/critical-bug
  git push
  git tag -a v1.0.1 -m "Fix: Correct logo padding on mobile"
  git push origin v1.0.1
  ```

Also merge the fix back into `dev` if needed to keep both in sync.

---

## 📝 Notes

- Don't commit directly to `main` or `dev` — past Harish did that, and it got messy fast.
- Write meaningful commit messages. "Update" doesn't cut it anymore.
- Use branches — it keeps the chaos contained.
- Delete merged branches to keep things tidy.
- This file is mainly to remind me how not to repeat the same mistakes. Public, but personal.
